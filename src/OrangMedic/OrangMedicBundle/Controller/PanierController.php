<?php

namespace OrangMedic\OrangMedicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Util\SecureRandom;

class PanierController extends Controller {

    /**
     * @Route("/ajouter/{nomProd}", name="ajouter_au_panier", requirements={"nomProd"=".+"})
     */
    public function ajouterAction($nomProd) {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier')) {
            $prod = $this->getDoctrine()->getManager()->getRepository('OrangMedicBundle:Produits')->findOneBy(array('libelle' => $nomProd));
            if ($prod->getStock() > 0) {
                $panier = array();
                $panier['qte'] = 1;
                $panier['total'] = (float) 0;
                $panier['prods'] = array();
                $prod->setQteAchete(1);
                $prod->getIdPromo();
                $panier['total'] = $panier['total'] + $prod->getPrixAchete();
                array_push($panier['prods'], $prod);
                $session->set('panier', $panier);
            }
        } else {
            $panier = $session->get('panier');
            $prods = array();
            $prods = $panier['prods'];
            $l = sizeof($prods);
            $existe = -1;
            for ($i = 0; $i < $l; $i++) {
                if ($prods[$i]->getLibelle() == $nomProd) {
                    $existe = $i;
                    break;
                }
            }

            if ($existe == -1) {
                $prod = $this->getDoctrine()->getManager()->getRepository('OrangMedicBundle:Produits')->findOneBy(array('libelle' => $nomProd));
                if ($prod->getStock() > 0) {
                    $prod->setQteAchete(1);
                    $prod->getIdPromo();
                    $panier['qte'] = $panier['qte'] + 1;
                    $panier['total'] = $panier['total'] + $prod->getPrixAchete();
                    array_push($panier['prods'], $prod);
                    $session->set('panier', $panier);
                }
            } else {
                $prod = $prods[$existe];
                if ($prod->getStock() > 0) {
                    $qte = $this->getRequest()->query->get('qte');
                    if (($qte != $prod->getQteAchete()) && ($qte > 0) && ($qte <= $prod->getStock())) {
                        $panier['qte'] = $panier['qte'] - $prod->getQteAchete();
                        $panier['total'] = $panier['total'] - $prod->getPrixAchete();
                        $prod->setQteAchete($qte);
                        $panier['qte'] = $panier['qte'] + $prod->getQteAchete();
                        $prod->setPrixAchete($prod->getPrix() * $prod->getQteAchete());
                        $panier['total'] = $panier['total'] + ($prod->getPrix() * $qte);
                        $session->set('panier', $panier);
                        return $this->redirect($this->generateUrl('lister'));
                    }
                }
            }
        }

        return $this->redirect($this->generateUrl('orang_medic_homepage'));
    }

    /**
     * @Route("/supprimer/{nomProd}", name="supprimer", requirements={"nomProd"=".+"})
     */
    public function supprimerAction($nomProd) {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');
        $prods = array();
        $prods = $panier['prods'];
        $l = sizeof($prods);
        if ($l == 1)
            $session->remove('panier');
        else {
            for ($i = 0; $i < $l; $i++) {
                if ($prods[$i]->getLibelle() == $nomProd) {
                    $panier['qte'] = $panier['qte'] - $prods[$i]->getQteAchete();
                    $panier['total'] = $panier['total'] - $prods[$i]->getPrixAchete();
                    array_splice($prods, $i, 1);
                    $panier['prods'] = $prods;
                    $session->set('panier', $panier);
                    break;
                }
            }
        }

        return $this->redirect($this->generateUrl('lister'));
    }

    public function listerAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        return $this->render('OrangMedicBundle:Default:panier.html.twig', array('categories' => $categorys,
                    'marques' => $brands));
    }

    public function annulerAction() {
        $session = $this->getRequest()->getSession();
        $session->remove('panier');
        return $this->redirect($this->generateUrl('orang_medic_homepage'));
    }

    public function enregistrerAction() {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');
        $client = $session->get('client');
        $commande = $session->get('commande');
        $em = $this->getDoctrine()->getManager();
        $prods = $panier['prods'];
        $l = sizeof($prods);
        $conn = $em->getConnection();
        $conn->insert('commande', array('idcmd' => $commande->getIdcmd(), 'email_client' => $client->getEmailClient(), 'prix' => $commande->getPrix(), 'qteTotale' => $commande->getQtetotale(), 'datedecommande' => $commande->getDatedecommande(), 'etat' => $commande->getEtat(), 'adresse' => $commande->getAdresse()));
        if (($commande) && ($panier) && ($client)) {
            for ($i = 0; $i < $l; $i++) {
                $conn->insert('commandeclient', array('idcmd' => $commande->getIdcmd(), 'libelle' => $prods[$i]->getLibelle(), 'qte' => getQteAchete(), 'prix' => getPrixAchete()));
                $emm = $this->getDoctrine()->getEntityManager();
                $produit = $emm->getRepository('OrangMedicBundle:Produits')->find($prods[$i]->getLibelle());
                $produit->setStock($produit->setStock() - $produit->getQteAchete());
                $emm->flush();
                $repository = $em->getRepository('OrangMedicBundle:Categorie');
                $categorys = $repository->findAll();
                $repository = $em->getRepository('OrangMedicBundle:Marque');
                $brands = $repository->findAll();
            }
            $session->remove('panier');
            $session->remove('commande');
            return $this->render('OrangMedicBundle:Default:transactiontermine.html.twig', array('categories' => $categorys,
                        'marques' => $brands));
        } else {
            die("Une erreur est produite empéchant la page de s'affiché correctement");
        }
    }

}

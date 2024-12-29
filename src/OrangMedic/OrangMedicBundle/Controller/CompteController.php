<?php

namespace OrangMedic\OrangMedicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use OrangMedic\OrangMedicBundle\Entity\Client;
use OrangMedic\OrangMedicBundle\Entity\CryptageEtDecryptage;
use Symfony\Component\Security\Core\Util\SecureRandom;
use OrangMedic\OrangMedicBundle\Entity\Commande;

class CompteController extends Controller {

    public function loginAction() {
        $email = $this->getRequest()->query->get('email');
        $mp = $this->getRequest()->query->get('mp');
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Client');
        $client = $repository->findOneBy(array('emailClient' => $email, 'mp' => CryptageEtDecryptage::mc_encrypt($mp), 'status' => 'activé'));
        if ($client) {
            $client->setMp($mp);
            $session = $this->getRequest()->getSession();
            if (!$session->has('client'))
                $session->set('client', $client);
            else
                $session->set('client', $client);
            return $this->redirect($this->generateUrl('orang_medic_homepage'));
        }
        else {
            $repository = $em->getRepository('OrangMedicBundle:Produits');
            $products = $repository->findAll();
            $repository = $em->getRepository('OrangMedicBundle:Categorie');
            $categorys = $repository->findAll();
            $repository = $em->getRepository('OrangMedicBundle:Marque');
            $brands = $repository->findAll();
            $message = "utilisateur non existant ou blocké par l'administrateur";
            return $this->render('OrangMedicBundle:Default:identification.html.twig', array('produits' => $products,
                        'categories' => $categorys,
                        'marques' => $brands,
                        'message' => $message)
            );
        }
    }

    public function registerAction() {
        $em = $this->getDoctrine()->getManager();
        $email = $this->getRequest()->query->get('email');
        $mp = $this->getRequest()->query->get('mp');
        $nom = $this->getRequest()->query->get('nom');
        $prenom = $this->getRequest()->query->get('prenom');
        $client = $em->getRepository('OrangMedicBundle:Client')->find($email);
        if ($client) {
            $client->setMp($mp);
            $repository = $em->getRepository('OrangMedicBundle:Produits');
            $products = $repository->findAll();
            $repository = $em->getRepository('OrangMedicBundle:Categorie');
            $categorys = $repository->findAll();
            $repository = $em->getRepository('OrangMedicBundle:Marque');
            $brands = $repository->findAll();
            $message = "Client existe, vérifier les champs";
            return $this->render('OrangMedicBundle:Default:inscription.html.twig', array('produits' => $products,
                        'categories' => $categorys,
                        'marques' => $brands,
                        'messageInscrit' => $message)
            );
        } else {
            $ecr = CryptageEtDecryptage::mc_encrypt($mp);
            $conn = $em->getConnection();
            $conn->insert('client', array('email_client' => $email, 'nom' => $nom, 'prenom' => $prenom, 'MP' => $ecr));
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('OrangMedicBundle:Client');
            $client = $repository->findOneBy(array('emailClient' => $email, 'mp' => CryptageEtDecryptage::mc_encrypt($mp), 'status' => 'activé'));
            $session = $this->getRequest()->getSession();
            $client->setMp($mp);
            if (!$session->has('client'))
                $session->set('client', $client);
            else
                $session->set('client', $client);
            return $this->redirect($this->generateUrl('orang_medic_homepage'));
        }
    }

    public function enregistrerComAction() {
        $nom = $this->getRequest()->query->get('nom');
        $prenom = $this->getRequest()->query->get('prenom');
        $adresse = $this->getRequest()->query->get('adresse');
        $code = $this->getRequest()->query->get('code');
        $gov = $this->getRequest()->query->get('gov');
        $session = $this->getRequest()->getSession();
        $client = $session->get('client');
        $panier = $session->get('panier');
        if ($client && $panier) {
            $em = $this->getDoctrine()->getManager();
            $generator = new SecureRandom();
            $email = explode("@", $client->getEmailClient());
            if ($adresse && $nom && $prenom && $adresse && $code && $gov) {
                $adresse = $adresse . "\n" . $gov . "\n " . $code . "\n Tunisie";
                $id = $email[0] . $generator->nextBytes(5) . rand(1, 100);
                $prix = $panier['total'];
                $qte = $panier['qte'];
                $etat = 'paié';
                $date = new \DateTime('now');
                $date = $date->format('Y-m-d h:m:s');
                $commande = new Commande();
                $commande->setIdcmd($id);
                $commande->setEmailClient($client);
                $commande->setAdresse($adresse);
                $commande->setEtat($etat);
                $commande->setDatedecommande($date);
                $commande->setPrix($prix);
                $commande->setQtetotale($qte);
                $session->set('commande', $commande);
                $repository = $em->getRepository('OrangMedicBundle:Categorie');
                $categorys = $repository->findAll();
                $repository = $em->getRepository('OrangMedicBundle:Marque');
                $brands = $repository->findAll();
                return $this->render('OrangMedicBundle:Default:confirmation.html.twig', array(
                            'categories' => $categorys,
                            'marques' => $brands));
            }
        }
        return $this->redirect($this->generateUrl('orang_medic_homepage'));
    }

    public function exitAction() {
        $session = $this->getRequest()->getSession();
        $session->remove('client');
        return $this->redirect($this->generateUrl('orang_medic_homepage'));
    }

    public function profilAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        $file = $this->getRequest()->files->get('upload');
        $session = $this->getRequest()->getSession();
        $client = $session->get('client');
        if ($client) {
            $client = $em->getRepository('OrangMedicBundle:Client')->find($client->getEmailClient());
            if ($file && ($this->getRequest()->getMethod() == 'POST') && ($file->isValid())) {
                $chemin = dirname($this->container->getParameter('kernel.root_dir')) . '/web/images/product-images';
                $nom = $file->getClientOriginalName();
                $file->move($chemin, $nom);
                $nom = 'images/product-images/' . $nom;
                $client->setPhoto($nom);
                $em->flush();
                $client->setMp(CryptageEtDecryptage::mc_decrypt($client->getMp()));
                $session->set('client', $client);
            }
            if ($this->getRequest()->getMethod() == 'GET') {
                $nom = $this->getRequest()->query->get('nom');
                $prenom = $this->getRequest()->query->get('prenom');
                $tel = $this->getRequest()->query->get('tel');
                $mp = $this->getRequest()->query->get('mp');
                $sexe = $this->getRequest()->query->get('sexe');

                if ($nom) {
                    $client = $em->getRepository('OrangMedicBundle:Client')->find($client->getEmailClient());
                    $client->setNom($nom);
                    $em->flush();
                    $session->set('client', $client);
                }
                if ($prenom) {
                    $client = $em->getRepository('OrangMedicBundle:Client')->find($client->getEmailClient());
                    $client->setPrenom($prenom);
                    $em->flush();
                    $session->set('client', $client);
                }
                if ($tel) {
                    $client = $em->getRepository('OrangMedicBundle:Client')->find($client->getEmailClient());
                    $client->setTel($tel);
                    $em->flush();
                    $session->set('client', $client);
                }
                if ($sexe && $sexe != '') {
                    $client = $em->getRepository('OrangMedicBundle:Client')->find($client->getEmailClient());
                    $client->setSexe($sexe);
                    $em->flush();
                    $session->set('client', $client);
                }
                if ($mp) {
                    $client = $em->getRepository('OrangMedicBundle:Client')->find($client->getEmailClient());
                    $client->setMp(CryptageEtDecryptage::mc_encrypt($mp));
                    $em->flush();
                    $client->setMp($mp);
                    $session->set('client', $client);
                }
            }
            return $this->render('OrangMedicBundle:Default:profil.html.twig', array(
                        'categories' => $categorys,
                        'marques' => $brands));
        } else
            die("il faut s'identifier avant d'accéder à cette page");
    }

    public function commandesAction() {
        $session = $this->getRequest()->getSession();
        $client = $session->get('client');
        if (!$client) {
            die("il faut s'identifier avant d'accéder à cette page");
        } else {
            $commandes = $this->getDoctrine()->getManager()->getRepository('OrangMedicBundle:Commande')->findBy(array('emailClient' => $client->getEmailClient()), array('datedecommande' => 'desc'));
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('OrangMedicBundle:Categorie');
            $categorys = $repository->findAll();
            $repository = $em->getRepository('OrangMedicBundle:Marque');
            $brands = $repository->findAll();
            return $this->render('OrangMedicBundle:Default:mesCommandes.html.twig', array(
                            'categories' => $categorys,
                            'commandes' =>  $commandes,
                            'marques' => $brands));
        }
    }

}

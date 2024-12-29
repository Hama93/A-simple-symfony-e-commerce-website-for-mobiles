<?php

namespace OrangMedic\OrangMedicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Produits');
        $products = $repository->findBy(array(), array('dateajout' => 'desc'));
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        return $this->render('OrangMedicBundle:Default:accueil.html.twig', array('produits' => $products,
                    'categories' => $categorys,
                    'marques' => $brands));
    }

    public function offresNVAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Produits');
        $res = $repository->findBy(array(), array('dateajout' => 'desc'));
        $products = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($res as $p) {
            if ((($p->getEtat() == "nouveau") or ( $p->getIdPromo()->count())) and ( $p->getStock() > 0)) {
                $products->add($p);
            }
        }
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        return $this->render('OrangMedicBundle:Default:produits.html.twig', array('produits' => $products,
                    'categories' => $categorys,
                    'marques' => $brands));
    }

    public function registerAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Produits');
        $products = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        return $this->render('OrangMedicBundle:Default:inscription.html.twig', array('produits' => $products,
                    'categories' => $categorys,
                    'marques' => $brands));
    }

    public function loginAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Produits');
        $products = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        $message = null;
        return $this->render('OrangMedicBundle:Default:identification.html.twig', array('produits' => $products,
                    'categories' => $categorys,
                    'marques' => $brands,
                    'message' => $message)
        );
    }

    /**
     * @Route("/produits/{nom}/{prod}", name="orang_medic_produits", requirements={"prod"=".+"})
     */
    public function productsAction($nom, $prod) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        if ($nom == 'categorie') {
            $category = $em->getRepository('OrangMedicBundle:Categorie')->find($prod);
            $products = $category->getLibelle();
            return $this->render('OrangMedicBundle:Default:produits.html.twig', array('produits' => $products,
                        'categories' => $categorys,
                        'marques' => $brands));
        }
        if ($nom == 'marque') {
            $brand = $em->getRepository('OrangMedicBundle:Marque')->find($prod);
            $products = $brand->getLibelle();
            return $this->render('OrangMedicBundle:Default:produits.html.twig', array('produits' => $products,
                        'categories' => $categorys,
                        'marques' => $brands));
        }
    }

    public function contactAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Produits');
        $products = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        return $this->render('OrangMedicBundle:Default:contact.html.twig', array('produits' => $products,
                    'categories' => $categorys,
                    'marques' => $brands));
    }

    public function detailsAction($nomProd) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Produits');
        $product = $repository->find($nomProd);
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        return $this->render('OrangMedicBundle:Default:details.html.twig', array('categories' => $categorys,
                    'marques' => $brands,
                    'produit' => $product));
    }

    public function checkoutAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        return $this->render('OrangMedicBundle:Default:commander.html.twig', array('categories' => $categorys,
                    'marques' => $brands));
    }

    public function mailAction() {
        $nom = $this->getRequest()->query->get('userName');
        $email = $this->getRequest()->query->get('userEmail');
        $mobile = $this->getRequest()->query->get('userPhone');
        $sujet = $this->getRequest()->query->get('userSubject');
        $msg = $this->getRequest()->query->get('userMsg');
        if($nom && $email && $mobile && $sujet && $msg)
        {
        $message = \Swift_Message::newInstance()
                ->setSubject($sujet)
                ->setFrom($email)
                ->setTo('neoOrangMedic@gmail.com')
                ->setBody($nom . " : " . $email . "\n" . $msg);
        $this->get('mailer')->send($message);
        return $this->redirect($this->generateUrl('orang_medic_homepage'));
        }
        else {
            die("Vérifiez les champs données et ré-essayer une autre fois");
        }
    }
   public function newsletterAction()
   {
        $newsletter = $this->getRequest()->query->get('newsletter');
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Produits');
        $products = $repository->findAll();
        if($newsletter)
        {
        $inscrit = $em->getRepository('OrangMedicBundle:Newsletter')->find($newsletter);
        if($inscrit){
            return $this->render('OrangMedicBundle:Default:accueil.html.twig', array('categories' => $categorys,
                    'marques' => $brands,
                    'produits' => $products,
                    'existe' => 'existe'));
        }
        else{
            $conn = $em->getConnection();
            $conn->insert('newsletter', array('emailN' => $newsletter));
            return $this->render('OrangMedicBundle:Default:accueil.html.twig', array('categories' => $categorys,
                    'marques' => $brands,
                    'produits' => $products,
                    'existe' => 'enregistré'));
        }
        }
   }
   public function supportAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('OrangMedicBundle:Categorie');
        $categorys = $repository->findAll();
        $repository = $em->getRepository('OrangMedicBundle:Marque');
        $brands = $repository->findAll();
        return $this->render('OrangMedicBundle:Default:support.html.twig', array('categories' => $categorys,
                    'marques' => $brands));
    }
}

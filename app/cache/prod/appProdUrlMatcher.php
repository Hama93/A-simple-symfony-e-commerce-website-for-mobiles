<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // orang_medic_homepage
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::indexAction',  '_route' => 'orang_medic_homepage',);
        }

        // orang_medic_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::registerAction',  '_route' => 'orang_medic_inscription',);
        }

        // orang_medic_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::loginAction',  '_route' => 'orang_medic_connexion',);
        }

        // orang_medic_produits
        if ($pathinfo === '/produits') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::productsAction',  '_route' => 'orang_medic_produits',);
        }

        // orang_medic_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::contactAction',  '_route' => 'orang_medic_contact',);
        }

        // orang_medic_details
        if ($pathinfo === '/details') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::detailsAction',  '_route' => 'orang_medic_details',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

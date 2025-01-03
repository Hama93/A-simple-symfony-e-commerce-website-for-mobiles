<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // orang_medic_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'orang_medic_homepage');
            }

            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::indexAction',  '_route' => 'orang_medic_homepage',);
        }

        // orang_medic_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::registerAction',  '_route' => 'orang_medic_inscription',);
        }

        // support
        if ($pathinfo === '/support') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::supportAction',  '_route' => 'support',);
        }

        // orang_medic_offresetnv
        if ($pathinfo === '/offresEtNouveautes') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::offresNVAction',  '_route' => 'orang_medic_offresetnv',);
        }

        // orang_medic_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::loginAction',  '_route' => 'orang_medic_connexion',);
        }

        // connexion
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\CompteController::loginAction',  '_route' => 'connexion',);
        }

        // enregistrer
        if ($pathinfo === '/enregistrer') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\CompteController::registerAction',  '_route' => 'enregistrer',);
        }

        // mesCommandes
        if ($pathinfo === '/mesCommandes') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\CompteController::commandesAction',  '_route' => 'mesCommandes',);
        }

        // deconnexion
        if ($pathinfo === '/deconnecter') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\CompteController::exitAction',  '_route' => 'deconnexion',);
        }

        // orang_medic_produits
        if (0 === strpos($pathinfo, '/produits') && preg_match('#^/produits/(?P<nom>[^/]++)/(?P<prod>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orang_medic_produits')), array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::productsAction',));
        }

        // orang_medic_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::contactAction',  '_route' => 'orang_medic_contact',);
        }

        // orang_medic_details
        if (0 === strpos($pathinfo, '/details') && preg_match('#^/details/(?P<nomProd>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orang_medic_details')), array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::detailsAction',));
        }

        // ajouter_au_panier
        if (0 === strpos($pathinfo, '/ajouter') && preg_match('#^/ajouter/(?P<nomProd>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_au_panier')), array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\PanierController::ajouterAction',));
        }

        // lister
        if ($pathinfo === '/lister') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\PanierController::listerAction',  '_route' => 'lister',);
        }

        // supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<nomProd>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\PanierController::supprimerAction',));
        }

        // commander
        if ($pathinfo === '/commander') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::checkoutAction',  '_route' => 'commander',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // enregistrerCommande
            if ($pathinfo === '/enregistrerCommander') {
                return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\CompteController::enregistrerComAction',  '_route' => 'enregistrerCommande',);
            }

            // Email
            if ($pathinfo === '/email') {
                return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::mailAction',  '_route' => 'Email',);
            }

        }

        // newsletter
        if ($pathinfo === '/newsletter') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\DefaultController::newsletterAction',  '_route' => 'newsletter',);
        }

        // profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'OrangMedic\\OrangMedicBundle\\Controller\\CompteController::profilAction',  '_route' => 'profil',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

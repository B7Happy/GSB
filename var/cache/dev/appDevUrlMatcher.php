<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // adminhome
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'PPEPharBundle\\Controller\\AdminController::indexAction',  '_route' => 'adminhome',);
            }

            // cc
            if ($pathinfo === '/admin/create') {
                return array (  '_controller' => 'PPEPharBundle\\Controller\\AdminController::createAction',  '_route' => 'cc',);
            }

            // ppephar_admin_edit
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ppephar_admin_edit')), array (  '_controller' => 'PPEPharBundle\\Controller\\AdminController::editAction',));
            }

            // ppephar_admin_delete
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ppephar_admin_delete')), array (  '_controller' => 'PPEPharBundle\\Controller\\AdminController::deleteAction',));
            }

            // chome
            if ($pathinfo === '/admin/client') {
                return array (  '_controller' => 'PPEPharBundle\\Controller\\AdminController::cliindexAction',  '_route' => 'chome',);
            }

            // adminlogin
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'PPEPharBundle\\Controller\\AdminController::loginAction',  '_route' => 'adminlogin',);
            }

        }

        if (0 === strpos($pathinfo, '/co')) {
            // commandee
            if ($pathinfo === '/coom') {
                return array (  '_controller' => 'PPEPharBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commandee',);
            }

            if (0 === strpos($pathinfo, '/compte')) {
                // compteh
                if ($pathinfo === '/compte') {
                    return array (  '_controller' => 'PPEPharBundle\\Controller\\CompteController::indexAction',  '_route' => 'compteh',);
                }

                // cperso
                if ($pathinfo === '/compte/perso') {
                    return array (  '_controller' => 'PPEPharBundle\\Controller\\CompteController::perosAction',  '_route' => 'cperso',);
                }

                // cmp
                if ($pathinfo === '/compte/mp') {
                    return array (  '_controller' => 'PPEPharBundle\\Controller\\CompteController::mpAction',  '_route' => 'cmp',);
                }

                // ppephar_compte_order
                if ($pathinfo === '/compte') {
                    return array (  '_controller' => 'PPEPharBundle\\Controller\\CompteController::orderAction',  '_route' => 'ppephar_compte_order',);
                }

            }

        }

        // hhh
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hhh');
            }

            return array (  '_controller' => 'PPEPharBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hhh',);
        }

        // homelogin
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'PPEPharBundle\\Controller\\LoginController::indexAction',  '_route' => 'homelogin',);
        }

        if (0 === strpos($pathinfo, '/sign')) {
            // signup
            if ($pathinfo === '/signup') {
                return array (  '_controller' => 'PPEPharBundle\\Controller\\LoginController::signupAction',  '_route' => 'signup',);
            }

            // deco
            if ($pathinfo === '/signout') {
                return array (  '_controller' => 'PPEPharBundle\\Controller\\LoginController::signoutAction',  '_route' => 'deco',);
            }

        }

        // produit
        if ($pathinfo === '/produit') {
            return array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::indexAction',  '_route' => 'produit',);
        }

        // nous
        if ($pathinfo === '/nous') {
            return array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::somAction',  '_route' => 'nous',);
        }

        // prep
        if ($pathinfo === '/prepanier') {
            return array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::prepanierAction',  '_route' => 'prep',);
        }

        // apanier
        if (0 === strpos($pathinfo, '/ajouterpanier') && preg_match('#^/ajouterpanier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'apanier')), array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::ajouterpanierAction',));
        }

        // panier
        if ($pathinfo === '/panier') {
            return array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::panierAction',  '_route' => 'panier',);
        }

        // span
        if (0 === strpos($pathinfo, '/suppanier') && preg_match('#^/suppanier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'span')), array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::supprepanierAction',));
        }

        // liv
        if ($pathinfo === '/livraison') {
            return array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::livraisonAction',  '_route' => 'liv',);
        }

        // payer
        if ($pathinfo === '/payer') {
            return array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::payerAction',  '_route' => 'payer',);
        }

        // confirmer
        if ($pathinfo === '/confirmer') {
            return array (  '_controller' => 'PPEPharBundle\\Controller\\ProduitController::confirmerAction',  '_route' => 'confirmer',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

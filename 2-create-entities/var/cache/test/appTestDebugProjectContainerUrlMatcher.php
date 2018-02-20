<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // api_entrypoint
        if (preg_match('#^/(?P<index>index)?(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
        }

        // api_doc
        if (0 === strpos($pathinfo, '/docs') && preg_match('#^/docs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
        }

        // api_jsonld_context
        if (0 === strpos($pathinfo, '/contexts') && preg_match('#^/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
        }

        if (0 === strpos($pathinfo, '/flights')) {
            // api_flights_get_collection
            if (preg_match('#^/flights(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_flights_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_flights_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Flight',  '_api_collection_operation_name' => 'get',));
            }
            not_api_flights_get_collection:

            // api_flights_post_collection
            if (preg_match('#^/flights(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_flights_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_flights_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Flight',  '_api_collection_operation_name' => 'post',));
            }
            not_api_flights_post_collection:

            // api_flights_get_item
            if (preg_match('#^/flights/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_flights_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_flights_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Flight',  '_api_item_operation_name' => 'get',));
            }
            not_api_flights_get_item:

            // api_flights_delete_item
            if (preg_match('#^/flights/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_flights_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_flights_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Flight',  '_api_item_operation_name' => 'delete',));
            }
            not_api_flights_delete_item:

            // api_flights_put_item
            if (preg_match('#^/flights/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_flights_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_flights_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Flight',  '_api_item_operation_name' => 'put',));
            }
            not_api_flights_put_item:

            // user_flight_yesterday
            if (preg_match('#^/flights/(?P<id>[^/]++)/topusers$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_flight_yesterday;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_flight_yesterday')), array (  '_controller' => 'AppBundle\\Controller\\FlightController::topUsersAction',  '_api_resource_class' => 'AppBundle\\Entity\\Flight',  '_api_item_operation_name' => 'topUsers',));
            }
            not_user_flight_yesterday:

        }

        elseif (0 === strpos($pathinfo, '/users')) {
            // api_users_get_collection
            if (preg_match('#^/users(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_users_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\User',  '_api_collection_operation_name' => 'get',));
            }
            not_api_users_get_collection:

            // api_users_post_collection
            if (preg_match('#^/users(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_users_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\User',  '_api_collection_operation_name' => 'post',));
            }
            not_api_users_post_collection:

            // api_users_get_item
            if (preg_match('#^/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_users_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\User',  '_api_item_operation_name' => 'get',));
            }
            not_api_users_get_item:

            // api_users_delete_item
            if (preg_match('#^/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_users_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\User',  '_api_item_operation_name' => 'delete',));
            }
            not_api_users_delete_item:

            // api_users_put_item
            if (preg_match('#^/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_users_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\User',  '_api_item_operation_name' => 'put',));
            }
            not_api_users_put_item:

        }

        elseif (0 === strpos($pathinfo, '/ancillaries')) {
            // api_ancillaries_get_collection
            if (preg_match('#^/ancillaries(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_ancillaries_get_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ancillaries_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Ancillary',  '_api_collection_operation_name' => 'get',));
            }
            not_api_ancillaries_get_collection:

            // api_ancillaries_post_collection
            if (preg_match('#^/ancillaries(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_api_ancillaries_post_collection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ancillaries_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Ancillary',  '_api_collection_operation_name' => 'post',));
            }
            not_api_ancillaries_post_collection:

            // api_ancillaries_get_item
            if (preg_match('#^/ancillaries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_api_ancillaries_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ancillaries_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Ancillary',  '_api_item_operation_name' => 'get',));
            }
            not_api_ancillaries_get_item:

            // api_ancillaries_delete_item
            if (preg_match('#^/ancillaries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_api_ancillaries_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ancillaries_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Ancillary',  '_api_item_operation_name' => 'delete',));
            }
            not_api_ancillaries_delete_item:

            // api_ancillaries_put_item
            if (preg_match('#^/ancillaries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_api_ancillaries_put_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ancillaries_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Ancillary',  '_api_item_operation_name' => 'put',));
            }
            not_api_ancillaries_put_item:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

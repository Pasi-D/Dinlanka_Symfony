<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/dinlanka')) {
            // indexpage
            if ('/dinlanka' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::indexAction',  '_route' => 'indexpage',);
            }

            // about
            if ('/dinlanka/about' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::aboutAction',  '_route' => 'about',);
            }

            // air_freight
            if ('/dinlanka/air-freight' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::airfreightAction',  '_route' => 'air_freight',);
            }

            // contact
            if ('/dinlanka/contact' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::contactAction',  '_route' => 'contact',);
            }

            // cargo_insurance
            if ('/dinlanka/dinlanka-cargo-insurance' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::cargoAction',  '_route' => 'cargo_insurance',);
            }

            // ior & eor
            if ('/dinlanka/ior-eor-services' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::ioreorAction',  '_route' => 'ior & eor',);
            }

            // containers for sale
            if ('/dinlanka/new-shipping-containers-for-sale' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::containers_for_saleAction',  '_route' => 'containers for sale',);
            }

            // ocean freight
            if ('/dinlanka/ocean-freight' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::oceanfreightAction',  '_route' => 'ocean freight',);
            }

            if (0 === strpos($pathinfo, '/dinlanka/s')) {
                // sea-air-service
                if ('/dinlanka/sea-air-service' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::sea_air_servicesAction',  '_route' => 'sea-air-service',);
                }

                // service
                if ('/dinlanka/service' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::serviceAction',  '_route' => 'service',);
                }

                // supply-chain-manegment
                if ('/dinlanka/supply-chain-manegment' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::supply_chain_managementAction',  '_route' => 'supply-chain-manegment',);
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

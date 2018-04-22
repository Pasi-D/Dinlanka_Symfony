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

        // indexpage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::indexAction',  '_route' => 'indexpage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_indexpage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'indexpage'));
            }

            return $ret;
        }
        not_indexpage:

        // about
        if ('/about' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::aboutAction',  '_route' => 'about',);
        }

        // air_freight
        if ('/air-freight' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::airfreightAction',  '_route' => 'air_freight',);
        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::contactAction',  '_route' => 'contact',);
        }

        // cargo_insurance
        if ('/dinlanka-cargo-insurance' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::cargoAction',  '_route' => 'cargo_insurance',);
        }

        // ior & eor
        if ('/ior-eor-services' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::ioreorAction',  '_route' => 'ior & eor',);
        }

        // containers for sale
        if ('/new-shipping-containers-for-sale' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::containers_for_saleAction',  '_route' => 'containers for sale',);
        }

        // ocean freight
        if ('/ocean-freight' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::oceanfreightAction',  '_route' => 'ocean freight',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // sea-air-service
            if ('/sea-air-service' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::sea_air_servicesAction',  '_route' => 'sea-air-service',);
            }

            // service
            if ('/service' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::serviceAction',  '_route' => 'service',);
            }

            // supply-chain-manegment
            if ('/supply-chain-manegment' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::supply_chain_managementAction',  '_route' => 'supply-chain-manegment',);
            }

        }

        // freezer transportation & solutions
        if ('/freezer-transportation-solutions' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::freezer_transportationAction',  '_route' => 'freezer transportation & solutions',);
        }

        // entrepot trade
        if ('/entrepot-trade' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DinLankaController::entrepot_tradeAction',  '_route' => 'entrepot trade',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

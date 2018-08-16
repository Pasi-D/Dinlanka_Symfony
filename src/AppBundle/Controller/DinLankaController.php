<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DinLankaController extends Controller
{
    /**
     * @Route("/", name="indexpage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('dinlanka/index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction(Request $request)
    {
        return $this->render('dinlanka/about.html.twig');
    }

    /**
     * @Route("/dinlanka-cargo-insurance", name="cargo_insurance")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function cargoAction(Request $request)
    {
        return $this->render('dinlanka/dinlanka-cargo-insurance.html.twig');
    }

    /**
     * @Route("/air-freight", name="air_freight")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function airfreightAction(Request $request)
    {
        return $this->render('dinlanka/air-freight.html.twig');
    }

    /**
     * @Route("/ior-eor-services", name="ior & eor")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ioreorAction(Request $request)
    {
        return $this->render('dinlanka/ior-eor-services.html.twig');
    }

    /**
     * @Route("/new-shipping-containers-for-sale", name="containers for sale")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function containers_for_saleAction(Request $request)
    {
        return $this->render('dinlanka/new-shipping-containers-for-sale.html.twig');
    }

    /**
     * @Route("/ocean-freight", name="ocean freight")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function oceanfreightAction(Request $request)
    {
        return $this->render('dinlanka/ocean-freight.html.twig');
    }

    /**
     * @Route("/sea-air-service", name="sea-air-service")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sea_air_servicesAction(Request $request)
    {
        return $this->render('dinlanka/sea-air-service.html.twig');
    }

    /**
     * @Route("/service", name="service")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function serviceAction(Request $request)
    {
        return $this->render('dinlanka/service.html.twig');
    }            
    /**
     * @Route("/supply-chain-manegment", name="supply-chain-manegment")
     */
    public function supply_chain_managementAction(Request $request)
    {
        return $this->render('dinlanka/supply-chain-manegment.html.twig');
    }

    /**
     * @Route("/freezer-transportation-solutions", name="freezer transportation & solutions")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function freezer_transportationAction(Request $request)
    {
        return $this->render('dinlanka/freezer-transportation-solutions.html.twig');
    }

    /**
     * @Route("/entrepot-trade", name="entrepot trade")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function entrepot_tradeAction(Request $request)
    {
        return $this->render('dinlanka/entrepot-trade.html.twig');
    }
    
    /**
     * @Route("/upb_cargo", name="upb_cargo")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function upb_cargoAction(Request $request)
    {
        return $this->render('dinlanka/upb_cargo.html.twig');
    }
    
    /**
     * @Route("/projectcargo-freight", name="ProjectCargo Freight")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function projectcargo_freightAction(Request $request)
    {
        return $this->render('dinlanka/project-cargo-freight.html.twig');
    }
}


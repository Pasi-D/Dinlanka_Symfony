<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DinLankaController extends Controller
{
    /**
     * @Route("/dinlanka", name="indexpage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('dinlanka/index.html.twig');
    }

    /**
     * @Route("/dinlanka/about", name="about")
     */
    public function aboutAction(Request $request)
    {

        return $this->render('dinlanka/about.html.twig');
    }

    /**
     * @Route("/dinlanka/contact", name="contact")
     */
    public function contactAction(Request $request)
    {

        return $this->render('dinlanka/contact.html.twig');
    }

    /**
     * @Route("/dinlanka/dinlanka-cargo-insurance", name="cargo_insurance")
     */
    public function cargoAction(Request $request)
    {

        return $this->render('dinlanka/dinlanka-cargo-insurance.html.twig');
    } 

    /**
     * @Route("/dinlanka/air-freight", name="air_freight")
     */
    public function airfreightAction(Request $request)
    {

        return $this->render('dinlanka/air-freight.html.twig');
    }  

    /**
     * @Route("/dinlanka/ior-eor-services", name="ior & eor")
     */
    public function ioreorAction(Request $request)
    {

        return $this->render('dinlanka/ior-eor-services.html.twig');
    }  

    /**
     * @Route("/dinlanka/new-shipping-containers-for-sale", name="containers for sale")
     */
    public function containers_for_saleAction(Request $request)
    {

        return $this->render('dinlanka/new-shipping-containers-for-sale.html.twig');
    }  

    /**
     * @Route("/dinlanka/ocean-freight", name="ocean freight")
     */
    public function oceanfreightAction(Request $request)
    {

        return $this->render('dinlanka/ocean-freight.html.twig');
    } 

    /**
     * @Route("/dinlanka/sea-air-service", name="sea-air-service")
     */
    public function sea_air_servicesAction(Request $request)
    {

        return $this->render('dinlanka/sea-air-service.html.twig');
    }    

    /**
     * @Route("/dinlanka/service", name="service")
     */
    public function serviceAction(Request $request)
    {

        return $this->render('dinlanka/service.html.twig');
    }            

    /**
     * @Route("/dinlanka/supply-chain-manegment", name="supply-chain-manegment")
     */
    public function supply_chain_managementAction(Request $request)
    {

        return $this->render('dinlanka/supply-chain-manegment.html.twig');
    }
}

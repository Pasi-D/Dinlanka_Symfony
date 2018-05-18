<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DinLankaController extends Controller
{
    /**
     * @Route("/", name="indexpage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('dinlanka/index.html.twig');
    }
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        return $this->render('dinlanka/about.html.twig');
    }
    
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
      
        return $this->render('dinlanka/contact.html.twig');
    }
    /**
     * @Route("/dinlanka-cargo-insurance", name="cargo_insurance")
     */
    public function cargoAction(Request $request)
    {
        return $this->render('dinlanka/dinlanka-cargo-insurance.html.twig');
    } 
    /**
     * @Route("/air-freight", name="air_freight")
     */
    public function airfreightAction(Request $request)
    {
        return $this->render('dinlanka/air-freight.html.twig');
    }  
    /**
     * @Route("/ior-eor-services", name="ior & eor")
     */
    public function ioreorAction(Request $request)
    {
        return $this->render('dinlanka/ior-eor-services.html.twig');
    }  
    /**
     * @Route("/new-shipping-containers-for-sale", name="containers for sale")
     */
    public function containers_for_saleAction(Request $request)
    {
        return $this->render('dinlanka/new-shipping-containers-for-sale.html.twig');
    }  
    /**
     * @Route("/ocean-freight", name="ocean freight")
     */
    public function oceanfreightAction(Request $request)
    {
        return $this->render('dinlanka/ocean-freight.html.twig');
    } 
    /**
     * @Route("/sea-air-service", name="sea-air-service")
     */
    public function sea_air_servicesAction(Request $request)
    {
        return $this->render('dinlanka/sea-air-service.html.twig');
    }    
    /**
     * @Route("/service", name="service")
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
     */
    public function freezer_transportationAction(Request $request)
    {
        return $this->render('dinlanka/freezer-transportation-solutions.html.twig');
    }
    /**
     * @Route("/entrepot-trade", name="entrepot trade")
     */
    public function entrepot_tradeAction(Request $request)
    {
        return $this->render('dinlanka/entrepot-trade.html.twig');
    }

    /**
     * @Route("/track-request", name="Tracking Request")
     */
    public function tracking_requestAction(Request $request)
    {
        return $this->render('dinlanka/track-order-request.html.twig');
    }


    /**
     * @Route("/track-info", name="Tracking information")
     */
    public function tracking_infoAction(Request $request)
    {

        return $this->render('dinlanka/tracking-info-page.html.twig');
    }
    
    /**
     * @Route("/admin", name="admin page")
     */
    public function adminAction(Request $request)
    {
        return $this->render('dinlanka/admin.html.twig');
    }    
   

}

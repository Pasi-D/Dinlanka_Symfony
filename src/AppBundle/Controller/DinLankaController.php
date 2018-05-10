<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
//use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

use AppBundle\Entity\Contact;

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
      $contact = new Contact;     
 
     # Add form fields
       $form = $this->createFormBuilder($contact)
       ->add('Name', TextType::class, array('label'=> 'Name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:7px')))
       ->add('Email_address', EmailType::class, array('label'=> 'Email address','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:7px')))
       ->add('Subject', TextType::class, array('label'=> 'Subject','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:6px')))
       ->add('Phone_Number', NumberType::class, array('label'=> 'Phone Number','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:6px')))
       ->add('Your_Message', TextareaType::class, array('label'=> 'Your Message','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:7px')))

       ->getForm();

     # Handle form response
       $form->handleRequest($request);

     #check if form is submitted 
 
       if($form->isSubmitted() &&  $form->isValid()){
           $name = $form['Name']->getData();
           $emailAddress = $form['Email_address']->getData();
           $subject = $form['Subject']->getData();
           $phoneNumber = $form['Phone_Number']->getData();
           $yourMessage = $form['Your_Message']->getData(); 
        
     # set form data   
 
           $contact->setName($name);
           $contact->setEmailAddress($emailAddress);          
           $contact->setSubject($subject);
           $contact->setPhoneNumber($phoneNumber);     
           $contact->setYourMessage($yourMessage);                
    

      # finally add data in database
 
           $entityManager = $this->getDoctrine()->getManager();      
           $entityManager -> persist($contact);
           $entityManager -> flush(); 

            $this->addFlash('Success', 'Your Message has Sent!');

           return $this->redirectToRoute('contact');

       }     
        return $this->render('dinlanka/contact.html.twig',
            array('form' => $form->createView())
        );  

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

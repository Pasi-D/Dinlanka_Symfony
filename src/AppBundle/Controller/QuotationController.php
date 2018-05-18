<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

use AppBundle\Entity\Quotation;

class QuotationController extends Controller
{
    /**
     * @Route("/quote", name="quotation")
     */

    public function quotetAction(Request $request)
    {
      $quote = new Quotation;     
 
     # Add form fields
       $form = $this->createFormBuilder($quote)
       ->add('Name', TextType::class, array('label'=> 'Name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:7px')))
       ->add('Company_Name', TextType::class, array('label'=> 'Company Name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:7px')))
       ->add('Email', EmailType::class, array('label'=> 'Your Email Address','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:7px')))
       ->add('Contact_Number', TelType::class, array('label'=> 'Contact Number','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:6px')))
       ->add('Origin', CountryType::class, array('label'=> 'Origin'))
       ->add('Transportation_Mode', ChoiceType::class, array('label'=> 'Mode of Transport','choices' => array(
                                                                                'Air Freight' => 'Air Freight',
                                                                                'Ocean Freight' => 'Ocean Freight',
                                                                                'Sea & Air' => 'Sea & Air',)))
      //Origin
       //Transportation_Mode

       ->getForm();
     # Handle form response
       $form->handleRequest($request);
     #check if form is submitted 
 
       if($form->isSubmitted() &&  $form->isValid()){
           $name = $form['Name']->getData();
           $companyName = $form['Company_Name']->getData();
           $email = $form['Email']->getData();
           $contactNumber = $form['Contact_Number']->getData();
           $origin = $form['Origin']->getData();
           $transportationMode = $form['Transportation_Mode']->getData();

        
     # set form data   
 
           $quote->setName($name);         
           $quote->setCompanyName($companyName);
           $quote->setEmail($email);
           $quote->setContactNumber($contactNumber);
           $quote->setOrigin($origin);
           $quote->setTransportationMode($transportationMode);
               
    
      # finally add data in database
 
           $entityManager = $this->getDoctrine()->getManager();      
           $entityManager -> persist($quote);
           $entityManager -> flush(); 
            $this->addFlash('Success', 'Your Message has Sent!');
           return $this->redirectToRoute('quotation');
       }     
        return $this->render('dinlanka/quotation.html.twig',
            array('form' => $form->createView())
        );  
    }
  }

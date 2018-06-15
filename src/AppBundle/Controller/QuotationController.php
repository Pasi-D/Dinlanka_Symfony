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
       ->add('Contact_Number', NumberType::class, array('label'=> 'Contact Number','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:6px')))
       ->add('Origin', ChoiceType::class, [
                                              'choices' => [
                                                            new Quotation('Ocean Freight'),
                                                            new Quotation('Cat2'),
                                                            new Quotation('Cat3'),
                                                            new Quotation('Cat4'),
                                                                                ],
                                              'choice_label' => function($quote, $key, $index) {
                                                    /** @var Quotation $quote */
                                                    return strtoupper($quote->getName());
                                                },
                                              'choice_attr' => function($quote, $key, $index) {
                                                    return ['class' => 'quote_'.strtolower($quote->getName())];
                                                },
                                              ])
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
           $$contactNumber = $form['Contact_Number']->getData();
        
     # set form data   
 
           $quote->setName($name);
           $quote->setEmailAddress($emailAddress);          
           $quote->setSubject($subject);
               
    
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
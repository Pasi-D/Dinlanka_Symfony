<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use AppBundle\Entity\Contact;
class ContactUsController extends Controller
{
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
       ->add('Phone_Number', TelType::class, array('label'=> 'Phone Number','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:6px')))
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
}
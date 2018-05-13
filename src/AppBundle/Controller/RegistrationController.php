<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class RegistrationController extends Controller
{
    /**
     * @Route("/admin/signup", name="registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        $user = new User();

       $form = $this->createFormBuilder($user)
       ->add('UserName', TextType::class, array('label'=> 'User Name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))
       ->add('Email', EmailType::class, array('label'=> 'Email','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))
       ->add('Password', PasswordType::class, array('label'=> 'Password','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))
       ->add('plainPassword', PasswordType::class, array('label'=> 'Confirm Password','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))

       ->getForm();

       $form->handleRequest($request); 
 
       if($form->isSubmitted() &&  $form->isValid()){
           $username = $form['UserName']->getData();
           $email = $form['Email']->getData();
           $password = $form['Password']->getData();
           $plainPassword = $form['plainPassword']->getData();
       
     # set form data   
 
           $user->setUsername($username);
           $user->setEmail($email);          
           $user->setPassword($password);
           $user->setPlainPassword($plainPassword);                    
    
      # finally add data in database
 
           $entityManager = $this->getDoctrine()->getManager();      
           $entityManager -> persist($user);
           $entityManager -> flush(); 

           return $this->redirectToRoute('admin page');
       }     

        return $this->render(
            'dinlanka/signup.html.twig',
            array('form' => $form->createView())
        );
    }
}
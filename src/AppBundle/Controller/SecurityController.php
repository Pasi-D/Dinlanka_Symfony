<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller{

   
    public function loginAction(){
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/login.html.twig', array(
                // last username entered by the user
                'username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    
    public function logoutAction(){
        throw new \RuntimeException('This should never be called directly');
    }
}
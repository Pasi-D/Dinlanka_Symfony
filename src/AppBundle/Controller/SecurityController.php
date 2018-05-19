<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{

    /**
     * @Route("/admin/login", name="admin_login")
     */

    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('dinlanka/admin/admin-login.html.twig', array(
                // last username entered by the user
                'username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    /**
     * @Route("/admin/logout", name="admin_logout")
     */
    public function logoutAction () {

    }
}

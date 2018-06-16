<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class TrackingController extends Controller
{
    /**
     * @Route("/track-request", name="Tracking Request")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function tracking_requestAction(Request $request)
    {
        #add form field
        $form = $this->createFormBuilder(null)
            ->add('Transportation_Mode', ChoiceType::class, array('label'=> 'Mode of Transport ','choices' => array(
                'Air Freight' => 'Air Freight',
                'Ocean Freight' => 'Ocean Freight',
                'Sea & Air' => 'Sea & Air',)))
            ->add('Tracking_ID', TextType::class, array('label' => 'Tracking ID', 'attr' => array('class' => 'form-control')))

            ->getForm();


        #render the form to view
        return $this->render('dinlanka/track-order-request.html.twig', [
            'form'=> $form->createView()
        ]);
    }

    /**
     * @Route("/track-search", name="handleSearchTrack")
     * @param Request $request
     */


    public function handleSearchTrack (Request $request) {
        var_export($request -> request);
        die();
    }




}

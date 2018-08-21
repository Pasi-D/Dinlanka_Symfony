<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\PropertyAccess\PropertyAccess;


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
            ->add('Tracking_ID', TextType::class, array('required' => true, 'label' => 'Tracking ID', 'attr' => array('class' => 'form-control')))

            ->getForm();



        #render the form to view
        return $this->render('dinlanka/track-order-request.html.twig', [
            'form'=> $form->createView()
        ]);
    }

    /**
     * @Route("/track-search", name="handleSearchTrack")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */


    public function handleSearchTrack (Request $request) {

        /*
         * API KEY
         *
         * AIzaSyBCltWRQRrRFBsRh9WUQ53KVbj3Nm6xc6s
         * */

        $propertyAccessor = PropertyAccess::createPropertyAccessor();



        $em = $this->getDoctrine()->getEntityManager();

        $tp_mode = $request->request->get('form')['Transportation_Mode'];
        $track_id = $request->request->get('form')['Tracking_ID'];


        $track_type = substr($track_id, 0, 3);
    
        /*
         * If $track_type is DIN search from mapping table should be done to get the global tracking id
         * else normal search
         * */

        if ($track_type === 'DIN'){
            /*
             * Depending on tp_mode first db search must focus on relevant mapping table
             * i.e either on DinLankaSeaFreight or DinLankaAirFreight
             * */
            if ($tp_mode === 'Air Freight'){

                $air_din_map = $em->getRepository('AppBundle:DinLankaAirFreight')->findBy(
                    array(
                        'dinlankaAirfreightBillNumber' => $track_id
                    )
                );

                if ($air_din_map == null) {
                    var_export('The tracking id you entered is not available or incorrect please retry again');
                    die();
                }else {

                $global_id = $propertyAccessor->getValue($air_din_map, '[0].airFreightBillNumber');

                $delivery_status = $propertyAccessor->getValue($air_din_map, '[0].delivered');

                /*
                 * If $delivery_status is true then not displaying the tracking data
                 * */

                if ($delivery_status){

                    $message = "This shipment has been delivered - No tracking data can be displayed";

                    return $this->render('dinlanka/track-fail.html.twig', [
                        'message' => $message
                    ]);

                }else {
                    $freight = $this->getDoctrine()->getRepository('AppBundle:AirFreight')->findBy(
                        array(
                            'airFreightBillNumber' => $global_id
                        )
                    );

                    $history = $propertyAccessor->getValue($freight, '[0].history');

                    $history_data = explode(" || ", $history);

                    $current_loc = $propertyAccessor->getValue($freight, '[0].currentLocation');

                    $latlong = $this->lookup($current_loc);

                    return $this->render('dinlanka/track-preview.html.twig', [
                        'latlong' => $latlong,
                        'current_loc' => $current_loc,
                        'history_data' => $history_data
                    ]);
                }

                }
            }elseif ($tp_mode === 'Ocean Freight'){
                $sea_din_map = $em->getRepository('AppBundle:DinLankaSeaFreight')->findBy(
                    array(
                        'dinlankaSeafreightBillNumber' => $track_id
                    )
                );

                if ($sea_din_map == null) {

                    $message = "The tracking id you entered is not available or incorrect please retry again";

                    return $this->render('dinlanka/track-fail.html.twig', [
                        'message' => $message
                    ]);

                }else {


                $global_id = $propertyAccessor->getValue($sea_din_map, '[0].seaFreightBillNumber');

                $delivery_status = $propertyAccessor->getValue($sea_din_map, '[0].delivered');

                if ($delivery_status){

                    $message = "This shipment has been delivered - No tracking data can be displayed";

                    return $this->render('dinlanka/track-fail.html.twig', [
                        'message' => $message
                    ]);
                }else{
                    $freight = $this->getDoctrine()->getRepository('AppBundle:SeaFreight')->findBy(
                        array(
                            'seaFreightBillNumber' => $global_id
                        )
                    );

                    $history = $propertyAccessor->getValue($freight, '[0].history');

                    $history_data = explode(" || ", $history);

                    $current_loc = $propertyAccessor->getValue($freight, '[0].currentLocation');

                    $latlong = $this->lookup($current_loc);

                    return $this->render('dinlanka/track-preview.html.twig', [
                        'latlong' => $latlong,
                        'current_loc' => $current_loc,
                        'history_data' => $history_data
                    ]);
                }

                }

            }else {
                //UPB Cargo

                $message = "You obviously called a tracking for UPB cargo which is currently unavailable";

                return $this->render('dinlanka/track-fail.html.twig', [
                    'message' => $message
                ]);

            }

        }else{
            /*
             * If searched using tracking ID (Not DIN)
             * */

            if ($tp_mode === 'Air Freight'){

                $freight = $this->getDoctrine()->getRepository('AppBundle:AirFreight')->findBy(
                    array(
                        'airFreightBillNumber' => $track_id
                    )
                );

                /*
                 * Corresponding din_air_mapping
                 * */
                $air_din_map = $em->getRepository('AppBundle:DinLankaAirFreight')->findBy(
                    array(
                        'airFreightBillNumber' => $track_id
                    )
                );

                if ($freight == null) {

                    $message = "The tracking id you entered is not available or incorrect please retry again";

                    return $this->render('dinlanka/track-fail.html.twig', [
                        'message' => $message
                    ]);
                }else {

                $delivery_status = $propertyAccessor->getValue($air_din_map, '[0].delivered');

                if ($delivery_status){

                    $message = "This shipment has been delivered - No tracking data can be displayed";

                    return $this->render('dinlanka/track-fail.html.twig', [
                        'message' => $message
                    ]);
                }else{
                    $history = $propertyAccessor->getValue($freight, '[0].history');

                    $history_data = explode(" || ", $history);

                    $current_loc = $propertyAccessor->getValue($freight, '[0].currentLocation');

                    $latlong = $this->lookup($current_loc);

                    return $this->render('dinlanka/track-preview.html.twig', [
                        'latlong' => $latlong,
                        'current_loc' => $current_loc,
                        'history_data' => $history_data
                    ]);
                }

                }
            }elseif ($tp_mode === 'Ocean Freight'){

                $freight = $this->getDoctrine()->getRepository('AppBundle:SeaFreight')->findBy(
                    array(
                        'seaFreightBillNumber' => $track_id
                    )
                );

                /*
                 * Corresponding sea_din_mapping
                 * */

                $sea_din_map = $em->getRepository('AppBundle:DinLankaSeaFreight')->findBy(
                    array(
                        'seaFreightBillNumber' => $track_id
                    )
                );

                if ($freight == null) {
                    $message = "The tracking id you entered is not available or incorrect please retry again";

                    return $this->render('dinlanka/track-fail.html.twig', [
                        'message' => $message
                    ]);
                }else {

                $delivery_status = $propertyAccessor->getValue($sea_din_map, '[0].delivered');

                if ($delivery_status){

                    $message = "This shipment has been delivered - No tracking data can be displayed";

                    return $this->render('dinlanka/track-fail.html.twig', [
                        'message' => $message
                    ]);

                }else{
                    $history = $propertyAccessor->getValue($freight, '[0].history');

                    $history_data = explode(" || ", $history);

                    $current_loc = $propertyAccessor->getValue($freight, '[0].currentLocation');

                    $latlong = $this->lookup($current_loc);

                    return $this->render('dinlanka/track-preview.html.twig', [
                        'latlong' => $latlong,
                        'current_loc' => $current_loc,
                        'history_data' => $history_data
                    ]);
                }
                }
            }else{
                //UPB Cargo

                $message = "You obviously called a tracking for UPB cargo which is currently unavailable";

                return $this->render('dinlanka/track-fail.html.twig', [
                    'message' => $message
                ]);

            }
        }
    }

    public function lookup($string){
        // google map geocode api url
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($string)."&key=AIzaSyBCltWRQRrRFBsRh9WUQ53KVbj3Nm6xc6s";//we are getting the response in json &key=AIzaSyBCltWRQRrRFBsRh9WUQ53KVbj3Nm6xc6s
        // get the json response
        $resp_json = file_get_contents($url);
        // decode the json
        $resp = json_decode($resp_json, true);
        //the  response status would  be 'OK', if are able to geocode the given address
        if($resp['status']=='OK') {
            // get the longtitude and latitude data
            $array = array(
                'lat' => $resp['results'][0]['geometry']['location']['lat'],
                'long' => $resp['results'][0]['geometry']['location']['lng'],
            );

            return $array;
        }else{
            $val = 'Geocode API failure';
            return $val;
        }
    }
}

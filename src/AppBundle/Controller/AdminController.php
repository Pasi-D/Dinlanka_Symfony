<?php

namespace AppBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\PropertyAccess\PropertyAccess;

use Twilio\Rest\Client;

class AdminController extends BaseAdminController

{

    public function createNewUserEntity()

    {

    return $this->get('fos_user.user_manager')->createUser();

    }

    public function prePersistUserEntity($user)

    {

    $this->get('fos_user.user_manager')->updateUser($user, false);

    }

    public function preUpdateUserEntity($user)

    {

    $this->get('fos_user.user_manager')->updateUser($user, false);

    }

    #message sending capability - via twilio
    public function messageAction()
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();

        $id = $this->request->query->get('id');

        $freight = $this->getDoctrine()->getRepository('AppBundle:AirFreight')->findBy(
            array(
                'id' => $id
            )
        );

        //get the contact number from description and other details
        $cargo_id = $propertyAccessor->getValue($freight, '[0].airFreightBillNumber');

        $description = $propertyAccessor->getValue($freight, '[0].description');

        $mobile_number = explode("]", explode(": ", explode(" || ", $description)[1])[1])[0];

        $customer_name = explode("]", explode(": ", explode(" || ", $description)[0])[1])[0];

        $last_location = $propertyAccessor->getValue($freight, '[0].currentLocation');




        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = '#################################';
        $auth_token = '##################################';

        // A Twilio number you own with SMS capabilities
        $twilio_number = "####################";

        $client = new Client($account_sid, $auth_token);

        $customer_caller_id = explode("+", $mobile_number)[1];
        //get all listed callerIds in twilio
        $outgoingCallerIds = $client->outgoingCallerIds
            ->read();

        $twilio_validate = false;
        foreach ($outgoingCallerIds as $record){
            if ($record->friendlyName === $customer_caller_id){
                //set the flag to true
                $twilio_validate = true;
            }
        }

        if ($twilio_validate){
            //send the sms without validation
            $client->messages->create(
            // Where to send a text message (your cell phone?)
                $mobile_number,
                array(
                    'from' => $twilio_number,
                    'body' => 'Hey '.$customer_name.' your shipment with cargo number : '.$cargo_id.' is now at '.$last_location
                )
            );

            var_export($customer_caller_id.' number is already validated');
            return $this->render('dinlanka/index.html.twig');
        }else{
            //validate as an outgoing caller id first
            $client->validationRequests
                ->create($mobile_number, // phoneNumber
                    array(
                        "friendlyName" => $customer_caller_id
                    )
                );

            //send the sms after validation
            $client->messages->create(
            // Where to send a text message (your cell phone?)
                $mobile_number,
                array(
                    'from' => $twilio_number,
                    'body' => 'Hey '.$customer_name.' your shipment with cargo number : '.$cargo_id.' is now at '.$last_location
                )
            );
            var_export($customer_caller_id.' number was not validated before');
            return $this->render('dinlanka/index.html.twig');
        }






    }

}


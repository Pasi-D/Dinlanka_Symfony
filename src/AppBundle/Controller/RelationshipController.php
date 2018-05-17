<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Roles;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class RelationshipController extends Controller
{

    public function addagentcargo(){

        $agent = new agent();
        $agent->setAgent_id();
        $agent->setAgent_name();
        $agent->setmobile();
        $agent->setemail();
        $agent->setaddress();

        $cargo = new cargo();
        $cargo->setCargo_id();
        $cargo->setCargo_type();
        $cargo->setCargo_description();

        $agent->setcargo($cargo);

        $em->persist($cargo);
        $em->persist($agent);

        $em->flush();

        exit();


    }

    public function addcustomercargo()
    {

        $customer = new customer();
        $customer->setcus_id();
        $customer->setcus_name();
        $customer->setmobile();
        $customer->setemail();
        $customer->setaddress();

        $cargo = new cargo();
        $cargo->setCargo_id();
        $cargo->setCargo_type();
        $cargo->setCargo_description();

        $customer->setcargo($cargo);

        $em->persist($cargo);
        $em->persist($customer);

        $em->flush();

        exit();

    }
    public function addadminagent(){

        $agent = new agent();
        $agent->setAgent_id();
        $agent->setAgent_name();
        $agent->setmobile();
        $agent->setemail();
        $agent->setaddress();

        $admin = new admin();
        $admin->setAdmin_id();
        $admin->setAdmin_name();
        $admin->setmobile();
        $admin->setemail();
        $admin->setaddress();

        $admin->setagent($agent);

        $em->persist($admin);
        $em->persist($agent);

        $em->flush();

        exit();


    }

    public function addcustomer_delivery()
    {

        $customer = new customer();
        $customer->setcus_id();
        $customer->setcus_name();
        $customer->setmobile();
        $customer->setemail();
        $customer->setaddress();

        $delivery = new delivery();
        $delivery->setdel_customer_id();
        $delivery->setdel_description();
        $delivery->setdestination();
        $delivery->setdel_date();
        $delivery->setstarting_location();
        $delivery->setcurrent_location();

        $customer->setdelivery($delivery);

        $em->persist($delivery);
        $em->persist($customer);

        $em->flush();

        exit();

    }

    public function addagent_delivery()
    {

        $customer = new customer();
        $customer->setcus_id();
        $customer->setcus_name();
        $customer->setmobile();
        $customer->setemail();
        $customer->setaddress();

        $delivery = new delivery();
        $delivery->setdel_customer_id();
        $delivery->setdel_description();
        $delivery->setdestination();
        $delivery->setdel_date();
        $delivery->setstarting_location();
        $delivery->setcurrent_location();

        $customer->setdelivery($delivery);

        $em->persist($delivery);
        $em->persist($customer);

        $em->flush();

        exit();

    }
    public function addagent_customer()
    {

        $agent = new agent();
        $agent->setAgent_id();
        $agent->setAgent_name();
        $agent->setmobile();
        $agent->setemail();
        $agent->setaddress();

        $customer = new customer();
        $customer->setcus_id();
        $customer->setcus_name();
        $customer->setmobile();
        $customer->setemail();
        $customer->setaddress();



        $agent->set($customer);

        $em->persist($customer);
        $em->persist($agent);

        $em->flush();

        exit();

    }
    public function addlogin_agent()
    {

        $login= new login();
        $login->setlogin_id();
        $login->setlogin_username();
        $login->setlogin_password();

        $agent = new agent();
        $agent->setAgent_id();
        $agent->setAgent_name();
        $agent->setmobile();
        $agent->setemail();
        $agent->setaddress();




        $login->set($agent);

        $em->persist($login);
        $em->persist($agent);

        $em->flush();

        exit();

    }
    public function addlogin_admin()
    {

        $login= new login();
        $login->setlogin_id();
        $login->setlogin_username();
        $login->setlogin_password();

        $admin = new admin();
        $admin->setAdmin_id();
        $admin->setAdmin_name();
        $admin->setmobile();
        $admin->setemail();
        $admin->setaddress();




        $login->set($agent);

        $em->persist($login);
        $em->persist($agent);

        $em->flush();

        exit();

    }
    public function addlogin_roles()
    {

        $login= new login();
        $login->setlogin_id();
        $login->setlogin_username();
        $login->setlogin_password();

        $Roles = new Roles();
        $Roles->setRole_id();
        $Roles->setRole_name();
        $Roles->setRole_description();


        $login->set($Roles);

        $em->persist($login);
        $em->persist($Roles);

        $em->flush();

        exit();

    }

}


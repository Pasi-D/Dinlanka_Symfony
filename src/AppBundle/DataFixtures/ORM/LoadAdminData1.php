<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Fosuser;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadAdminData implements FixtureInterface, ContainerAwareInterface {

    private $container;
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $fosuser = new Fosuser();
        $fosuser->setUsername('admin2');
        #$fosuser->setUsernameCanonical('admin2')
        $fosuser->setEmail('dinlanka@admin.com');
        #$fosuser->setEmailCanonical('dinlanka@admin.com')
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($fosuser, '1234');
        $fosuser->setPassword($password);
        $fosuser->setEnabled(true);
        $fosuser->setRoles(array('ROLE_ADMIN'));

        $manager->persist($fosuser);
        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class login
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="login")
 */
class login{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $login_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $login_username;
    /**
     * @ORM\Column(type="string")
     */
    protected $login_password;


    /**
     * @ORM\OneToOne(targetEntity="Agent", mappedBy="login")
     * @ORM\JoinColumn(name="Agent_id",referencedColumnName="Agent_id")
     */

    private $Agent;

    /**
     * @ORM\OneToOne(targetEntity="Admin", mappedBy="login")
     * @ORM\JoinColumn(name="Admin_id",referencedColumnName="Admin_id")
     */

    private $Admin;

    public function __construct($login_id)
    {
        $this->login_id=$login_id;
    }
}





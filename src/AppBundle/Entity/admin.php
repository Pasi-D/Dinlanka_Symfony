<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Admin
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="Admin")
 */

class Admin{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Admin_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $Admin_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $mobile;
    /**
     * @ORM\Column(type="string")
     */
    protected $address;
    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @ORM\OneToMany(targetEntity="agent",mappedBy="admin")
     *
     */

    private $agent;
    /**
     * @ORM\OneToOne(targetEntity="login", inversedBy="Admin")
     * @ORM\JoinColumn(name="login_id",referencedColumnName="login_id")
     */

    private $login;





    public function __construct($Admin_id)
    {
        $this->Admin_id=$Admin_id;
    }
}

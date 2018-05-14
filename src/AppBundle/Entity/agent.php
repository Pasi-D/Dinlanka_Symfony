<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Agent
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AgentRepository")
 * @ORM\Table(name="Agent")
 */

class Agent{
/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $Agent_id;
/**
* @ORM\Column(type="string")
*/
protected $Agent_name;
/**
* @ORM\Column(type="string")
*/
protected $mobile;
/**
* @ORM\Column(type="string")
*/
protected $email;
/**
* @ORM\Column(type="string")
*/
protected $address;

    /**
     * @ORM\OneToMany(targetEntity="cargo",mappedBy="agent")
     *
     */

    private $cargo;

    /**
     * @ORM\ManyToOne(targetEntity="admin", inversedBy="agent")
     * @ORM\JoinColumn(name="Admin_id",referencedColumnName="Admin_id")
     */

    private $admin;

    /**
     * @ORM\OneToMany(targetEntity="delivery",mappedBy="agent")
     *
     */

    private $delivery;

    /**
     * @ORM\OneToMany(targetEntity="customer",mappedBy="agent")
     *
     */

    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="admin", inversedBy="agent")
     * @ORM\JoinColumn(name="Admin_id",referencedColumnName="Admin_id")
     */

    private $Admin;

    /**
     * @ORM\OneToOne(targetEntity="login",inversedBy="Agent")
     *@ORM\JoinColumn(name="login_id",referencedColumnName="login_id")
     */

    private $login;


    public function __construct($Agent_id)
    {
        $this->Agent_id=$Agent_id;
    }
}



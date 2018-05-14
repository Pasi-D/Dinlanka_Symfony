<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Customer
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="Customer")
 */

class Customer{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $cus_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $cus_name;
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
     * @ORM\OneToMany(targetEntity="cargo",mappedBy="customer")
     *
     */

    private $cargo;

    /**
     * @ORM\OneToMany(targetEntity="delivery",mappedBy="customer")
     *
     */

    private $delivery;


    /**
     * @ORM\ManyToOne(targetEntity="agent", inversedBy="customer")
     * @ORM\JoinColumn(name="Agent_id",referencedColumnName="Agent_id")
     */

    private $agent;


    public function __construct($cus_id)
    {
        $this->cus_id=$cus_id;
    }

}

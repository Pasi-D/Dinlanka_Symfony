<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Delivery
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="Delivery")
 */

class Delivery{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $del_customer_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $del_description;

    /**
     * @ORM\Column(type="string")
     */
    protected $destination;
    /**
     * @ORM\Column(type="string")
     */
    protected $del_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $starting_location;
    /**
     * @ORM\Column(type="string")
     */
    protected $current_location;

    /**
     * @ORM\ManyToOne(targetEntity="customer", inversedBy="delivery")
     * @ORM\JoinColumn(name="cus_id",referencedColumnName="cus_id")
     */

    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="agent", inversedBy="delivery")
     * @ORM\JoinColumn(name="Agent_id",referencedColumnName="Agent_id")
     */

    private $agent;




    public function __construct($del_customer_id)
    {
        $this->del_customer_id=$del_customer_id;
    }

}

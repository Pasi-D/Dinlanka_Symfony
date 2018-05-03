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
     * @ORM\Column(type="integer")
     */
    protected $cargo_id;
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

    public function __construct($del_customer_id)
    {
        $this->del_customer_id=$del_customer_id;
    }

}

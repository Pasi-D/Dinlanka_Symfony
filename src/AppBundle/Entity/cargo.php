<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Cargo
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="Cargo")
 */

class Cargo{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Cargo_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $Cargo_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $Cargo_description;

    /**
     * @ORM\ManyToOne(targetEntity="agent", inversedBy="cargo")
     * @ORM\JoinColumn(name="Agent_id",referencedColumnName="Agent_id")
     */

    private $agent;

    /**
     * @ORM\ManyToOne(targetEntity="customer", inversedBy="customer")
     * @ORM\JoinColumn(name="cus_id",referencedColumnName="cus_id")
     */

    private $customer;

    public function __construct($Cargo_id)
    {
        $this->Cargo_id=$Cargo_id;
    }
}

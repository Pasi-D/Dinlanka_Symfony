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


    public function __construct($Admin_id)
    {
        $this->Admin_id=$Admin_id;
    }
}

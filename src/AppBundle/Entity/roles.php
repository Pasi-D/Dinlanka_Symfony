<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Roles
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="Roles")
 */

class Roles{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Role_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $Role_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $Role_description;

    public function __construct($Role_id)
    {
        $this->Role_id=$Role_id;
    }

}

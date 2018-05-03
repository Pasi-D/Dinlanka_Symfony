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
class db{
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

    public function __construct($login_id)
    {
        $this->login_id=$login_id;
    }
}





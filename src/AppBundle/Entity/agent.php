<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Agent
 * @package AppBundle\Entity
 *
 * @ORM\Entity
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

    public function __construct($Agent_id)
    {
        $this->Agent_id=$Agent_id;
    }
}

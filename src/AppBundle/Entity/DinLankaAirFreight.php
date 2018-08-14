<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * DinLankaAirFreight
 *
 * @ORM\Table(name="DinLanka_Air_Freight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DinLankaAirFreightRepository")
 */
class DinLankaAirFreight
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 8,minMessage = "Minimum Length of the Bill Number is 8")
     * @ORM\Column(name="AirFreightBillNumber", type="string", length=255, unique=true)
     */
    private $airFreightBillNumber;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 8,minMessage = "Minimum Length of the Bill Number is 8")
     * @Assert\Regex(pattern="/^DIN/", message="Bill Number Starts with DIN") 
     * @ORM\Column(name="DinlankaAirfreightBillNumber", type="string", length=255, unique=true)
     */
    private $dinlankaAirfreightBillNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="Delivered", type="boolean")
     */
    private $delivered;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set airFreightBillNumber
     *
     * @param string $saeFreightBillNumber
     *
     * @return DinLankaAirFreight
     */
    public function setairFreightBillNumber($airFreightBillNumber)
    {
        $this->airFreightBillNumber = $airFreightBillNumber;

        return $this;
    }

    /**
     * Get airFreightBillNumber
     *
     * @return string
     */
    public function getAirFreightBillNumber()
    {
        return $this->airFreightBillNumber;
    }

    /**
     * Set dinlankaAirfreightBillNumber
     *
     * @param string $dinlankaAirfreightBillNumber
     *
     * @return DinLankaAirFreight
     */
    public function setDinlankaAirfreightBillNumber($dinlankaAirfreightBillNumber)
    {
        $this->dinlankaAirfreightBillNumber = $dinlankaAirfreightBillNumber;

        return $this;
    }

    /**
     * Get dinlankaAirfreightBillNumber
     *
     * @return string
     */
    public function getDinlankaAirfreightBillNumber()
    {
        return $this->dinlankaAirfreightBillNumber;
    }

    /**
     * Set delivered
     *
     * @param boolean $delivered
     *
     * @return DinLankaAirFreight
     */
    public function setDelivered($delivered)
    {
        $this->delivered = $delivered;

        return $this;
    }

    /**
     * Get delivered
     *
     * @return bool
     */
    public function getDelivered()
    {
        return $this->delivered;
    }
}


<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dinlanka_air_freight
 *
 * @ORM\Table(name="dinlanka_air_freight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Dinlanka_air_freightRepository")
 */
class Dinlanka_air_freight
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
     * @Assert\Length(min = 3, minMessage = "Minimum Length of the bill no is 3")
     * @ORM\Column(name="AirFreight_Bill_No", type="string", length=255, unique=true)
     */
    private $airFreightBillNo;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 3, minMessage = "Minimum Length of the bill no is 3")
     * @Assert\Regex(pattern="/^DIN/", message="Invalid DinLanka Air Bill Number")
     * @ORM\Column(name="Dinlanka_airFreight_billNo", type="string", length=255, unique=true)
     */
    private $dinlankaAirFreightBillNo;

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
     * Set airFreightBillNo
     *
     * @param string $airFreightBillNo
     *
     * @return Dinlanka_air_freight
     */
    public function setAirFreightBillNo($airFreightBillNo)
    {
        $this->airFreightBillNo = $airFreightBillNo;

        return $this;
    }

    /**
     * Get airFreightBillNo
     *
     * @return string
     */
    public function getAirFreightBillNo()
    {
        return $this->airFreightBillNo;
    }

    /**
     * Set dinlankaAirFreightBillNo
     *
     * @param string $dinlankaAirFreightBillNo
     *
     * @return Dinlanka_air_freight
     */
    public function setDinlankaAirFreightBillNo($dinlankaAirFreightBillNo)
    {
        $this->dinlankaAirFreightBillNo = $dinlankaAirFreightBillNo;

        return $this;
    }

    /**
     * Get dinlankaAirFreightBillNo
     *
     * @return string
     */
    public function getDinlankaAirFreightBillNo()
    {
        return $this->dinlankaAirFreightBillNo;
    }
}


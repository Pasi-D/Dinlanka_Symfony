<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * DinLankaSeaFreight
 *
 * @ORM\Table(name="DinLanka_Sea_Freight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DinLankaSeaFreightRepository")
 */
class DinLankaSeaFreight
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
     * @ORM\Column(name="SeaFreightBillNumber", type="string", length=255, unique=true)
     */
    private $seaFreightBillNumber;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 8,minMessage = "Minimum Length of the Bill Number is 8")
     * @Assert\Regex(pattern="/^DIN/", message="Bill Number Starts with DIN") 
     * @ORM\Column(name="DinlankaSeafreightBillNumber", type="string", length=255, unique=true)
     */
    private $dinlankaSeafreightBillNumber;

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
     * Set seaFreightBillNumber
     *
     * @param string $saeFreightBillNumber
     *
     * @return DinLankaSeaFreight
     */
    public function setseaFreightBillNumber($seaFreightBillNumber)
    {
        $this->seaFreightBillNumber = $seaFreightBillNumber;

        return $this;
    }

    /**
     * Get seaFreightBillNumber
     *
     * @return string
     */
    public function getSeaFreightBillNumber()
    {
        return $this->seaFreightBillNumber;
    }

    /**
     * Set dinlankaSeafreightBillNumber
     *
     * @param string $dinlankaSeafreightBillNumber
     *
     * @return DinLankaSeaFreight
     */
    public function setDinlankaSeafreightBillNumber($dinlankaSeafreightBillNumber)
    {
        $this->dinlankaSeafreightBillNumber = $dinlankaSeafreightBillNumber;

        return $this;
    }

    /**
     * Get dinlankaSeafreightBillNumber
     *
     * @return string
     */
    public function getDinlankaSeafreightBillNumber()
    {
        return $this->dinlankaSeafreightBillNumber;
    }

    /**
     * Set delivered
     *
     * @param boolean $delivered
     *
     * @return DinLankaSeaFreight
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


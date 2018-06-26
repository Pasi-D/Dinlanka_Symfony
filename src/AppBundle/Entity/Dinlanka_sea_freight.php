<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dinlanka_sea_freight
 *
 * @ORM\Table(name="dinlanka_sea_freight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Dinlanka_sea_freightRepository")
 */
class Dinlanka_sea_freight
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
     * @Assert\Length(min = 3, minMessage = "Minimum Length of the telephone no is 3")
     * @ORM\Column(name="SeaFreight_Bill_No", type="string", length=255, unique=true)
     */
    private $seaFreightBillNo;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 3, minMessage = "Minimum Length of the telephone no is 3")
     * @Assert\Regex(pattern="/^DIN/", message="Invalid DinLanka Sea Bill Number")
     * @ORM\Column(name="Dinlanka_seaFreight_billNo", type="string", length=255, unique=true)
     */
    private $dinlankaSeaFreightBillNo;


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
     * Set seaFreightBillNo
     *
     * @param string $seaFreightBillNo
     *
     * @return Dinlanka_sea_freight
     */
    public function setSeaFreightBillNo($seaFreightBillNo)
    {
        $this->seaFreightBillNo = $seaFreightBillNo;

        return $this;
    }

    /**
     * Get seaFreightBillNo
     *
     * @return string
     */
    public function getSeaFreightBillNo()
    {
        return $this->seaFreightBillNo;
    }

    /**
     * Set dinlankaSeaFreightBillNo
     *
     * @param string $dinlankaSeaFreightBillNo
     *
     * @return Dinlanka_sea_freight
     */
    public function setDinlankaSeaFreightBillNo($dinlankaSeaFreightBillNo)
    {
        $this->dinlankaSeaFreightBillNo = $dinlankaSeaFreightBillNo;

        return $this;
    }

    /**
     * Get dinlankaSeaFreightBillNo
     *
     * @return string
     */
    public function getDinlankaSeaFreightBillNo()
    {
        return $this->dinlankaSeaFreightBillNo;
    }
}


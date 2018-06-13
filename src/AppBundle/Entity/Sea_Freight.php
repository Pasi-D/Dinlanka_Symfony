<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sea_Freight
 *
 * @ORM\Table(name="sea__freight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Sea_FreightRepository")
 */
class Sea_Freight
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
     * @ORM\Column(name="Sea_Freight_Bill_No", type="string", length=255, unique=true)
     */
    private $seaFreightBillNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Departure", type="string", length=255)
     */
    private $departure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Departure_Date", type="datetime")
     */
    private $departureDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Arrival", type="string", length=255)
     */
    private $arrival;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Arrival_Date", type="datetime")
     */
    private $arrivalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Dinlanka_Sea_Bill", type="string", length=255, nullable=true, unique=true)
     */
    private $dinLankaSeaBill;


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
     * @return Sea_Freight
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
     * Set departure
     *
     * @param string $departure
     *
     * @return Sea_Freight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set departureDate
     *
     * @param \DateTime $departureDate
     *
     * @return Sea_Freight
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Get departureDate
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     *
     * @return Sea_Freight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     *
     * @return Sea_Freight
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Set dinLankaSeaBill
     *
     * @param string $dinLankaSeaBill
     *
     * @return Sea_Freight
     */
    public function setDinLankaSeaBill($dinLankaSeaBill)
    {
        $this->dinLankaSeaBill = $dinLankaSeaBill;

        return $this;
    }

    /**
     * Get dinLankaSeaBill
     *
     * @return string
     */
    public function getDinLankaSeaBill()
    {
        return $this->dinLankaSeaBill;
    }
}


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
     * @ORM\Column(name="departure", type="string", length=255)
     */
    private $departure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="departure_date", type="datetime")
     */
    private $departureDate;

    /**
     * @var string
     *
     * @ORM\Column(name="arrival", type="string", length=255)
     */
    private $arrival;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrival_date", type="datetime")
     */
    private $arrivalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="current_status", type="string", length=255)
     */
    private $currentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="seaFreight_bill", type="string", length=255, unique=true)
     */
    private $seaFreightBill;


    /**
     * @ORM\OneToOne(targetEntity="invoicemapping_sea", inversedBy="sea_freight")
     * @ORM\JoinColumn(name="bill_id", referencedColumnName="id")
     */
    private $invoicemapping_sea;    


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
     * Set currentStatus
     *
     * @param string $currentStatus
     *
     * @return Sea_Freight
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus = $currentStatus;

        return $this;
    }

    /**
     * Get currentStatus
     *
     * @return string
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * Set seaFreightBill
     *
     * @param string $seaFreightBill
     *
     * @return Sea_Freight
     */
    public function setSeaFreightBill($seaFreightBill)
    {
        $this->seaFreightBill = $seaFreightBill;

        return $this;
    }

    /**
     * Get seaFreightBill
     *
     * @return string
     */
    public function getSeaFreightBill()
    {
        return $this->seaFreightBill;
    }
}


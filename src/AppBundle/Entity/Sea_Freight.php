<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
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
     * @Assert\NotBlank()
     * @Assert\Length(min = 3, minMessage = "Minimum Length of the telephone no is 3")
     * @ORM\Column(name="Sea_Freight_Bill_No", type="string", length=255, unique=true)
     */
    private $seaFreightBillNo;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Departure", type="string", length=255)
     */
    private $departure;

    /**
     * @var \DateTime
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Departure_Date", type="datetime")
     */
    private $departureDate;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Arrival", type="string", length=255)
     */
    private $arrival;

    /**
     * @var \DateTime
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Arrival_Date", type="datetime")
     */
    private $arrivalDate;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Current_Status", type="string", length=255)
     */
    private $currentStatus;

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
     * Set currentStatus
     *
     * @param string $currentStatus
     *
     * @return Air_Freight
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

}


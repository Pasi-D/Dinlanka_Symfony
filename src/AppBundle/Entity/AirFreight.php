<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * AirFreight
 *
 * @ORM\Table(name="air_freight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AirFreightRepository")
 */
class AirFreight
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
     * @ORM\Column(name="Departure", type="string", length=255)
     */
    private $departure;

    /**
     * @var \DateTime
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="DepartureDate", type="datetime")
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
     * @ORM\Column(name="ArrivalDate", type="datetime")
     */
    private $arrivalDate;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="CurrentLocation", type="string", length=255)
     */
    private $currentLocation;

    /**
     * @var text
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Description", type="text", length=255)
     */
    private $description;

    
    /**
     * @var string
     *
     * @ORM\Column(name="history", type="text", nullable=true)
     */
    private $history;

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
     * @param string $airFreightBillNumber
     *
     * @return AirFreight
     */
    public function setAirFreightBillNumber($AirFreightBillNumber)
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
     * Set departure
     *
     * @param string $departure
     *
     * @return AirFreight
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
     * @return AirFreight
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
     * @return AirFreight
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
     * @return AirFreight
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
     * Set currentLocation
     *
     * @param string $currentLocation
     *
     * @return AirFreight
     */
    public function setCurrentLocation($currentLocation)
    {
        $this->currentLocation = $currentLocation;

        return $this;
    }

    /**
     * Get currentLocation
     *
     * @return string
     */
    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return AirFreight
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set history
     *
     * @param string $history
     *
     * @return AirFreight
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get history
     *
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set delivered
     *
     * @param boolean $delivered
     *
     * @return upb
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


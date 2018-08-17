<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * SeaFreight
 *
 * @ORM\Table(name="sea_freight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeaFreightRepository")
 */
class SeaFreight
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
     * Set seaFreightBillNumber
     *
     * @param string $seaFreightBillNumber
     *
     * @return SeaFreight
     */
    public function setSeaFreightBillNumber($seaFreightBillNumber)
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
     * Set departure
     *
     * @param string $departure
     *
     * @return SeaFreight
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
     * @return SeaFreight
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
     * @return SeaFreight
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
     * @return SeaFreight
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
     * @return SeaFreight
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
     * @return SeaFreight
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
     * @return SeaFreight
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


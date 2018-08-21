<?php

namespace AppBundle\Entity;
//testing 
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * upb
 *
 * @ORM\Table(name="upb")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\upbRepository")
 */
class upb
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
     * @ORM\Column(name="upbBillNumber", type="string", length=255, unique=true)
     */
    private $upbBillNumber;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="PickupPoint", type="string", length=255)
     */
    private $pickupPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="WarehousePick", type="string", length=255)
     */
    private $warehousePick;

    /**
     * @var string
     *
     * @ORM\Column(name="PortDeparture", type="string", length=255)
     */
    private $portDeparture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DepartureDate", type="datetime")
     */
    private $departureDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ArrivalDate", type="datetime")
     */
    private $arrivalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="portArrive", type="string", length=255)
     */
    private $portArrive;

    /**
     * @var string
     *
     * @ORM\Column(name="WarehouseDrop", type="string", length=255)
     */
    private $warehouseDrop;

    /**
     * @var string
     *
     * @ORM\Column(name="DropPoint", type="string", length=255)
     */
    private $dropPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrentLocation", type="string", length=255)
     */
    private $currentLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
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
     * Set upbBillNumber
     *
     * @param string $upbBillNumber
     *
     * @return upb
     */
    public function setUpbBillNumber($upbBillNumber)
    {
        $this->upbBillNumber = $upbBillNumber;

        return $this;
    }

    /**
     * Get upbBillNumber
     *
     * @return string
     */
    public function getUpbBillNumber()
    {
        return $this->upbBillNumber;
    }

    /**
     * Set pickupPoint
     *
     * @param string $pickupPoint
     *
     * @return upb
     */
    public function setPickupPoint($pickupPoint)
    {
        $this->pickupPoint = $pickupPoint;

        return $this;
    }

    /**
     * Get pickupPoint
     *
     * @return string
     */
    public function getPickupPoint()
    {
        return $this->pickupPoint;
    }

    /**
     * Set warehousePick
     *
     * @param string $warehousePick
     *
     * @return upb
     */
    public function setWarehousePick($warehousePick)
    {
        $this->warehousePick = $warehousePick;

        return $this;
    }

    /**
     * Get warehousePick
     *
     * @return string
     */
    public function getWarehousePick()
    {
        return $this->warehousePick;
    }

    /**
     * Set portDeparture
     *
     * @param string $portDeparture
     *
     * @return upb
     */
    public function setPortDeparture($portDeparture)
    {
        $this->portDeparture = $portDeparture;

        return $this;
    }

    /**
     * Get portDeparture
     *
     * @return string
     */
    public function getPortDeparture()
    {
        return $this->portDeparture;
    }

    /**
     * Set departureDate
     *
     * @param \DateTime $departureDate
     *
     * @return upb
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
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     *
     * @return upb
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
     * Set portArrive
     *
     * @param string $portArrive
     *
     * @return upb
     */
    public function setPortArrive($portArrive)
    {
        $this->portArrive = $portArrive;

        return $this;
    }

    /**
     * Get portArrive
     *
     * @return string
     */
    public function getPortArrive()
    {
        return $this->portArrive;
    }

    /**
     * Set warehouseDrop
     *
     * @param string $warehouseDrop
     *
     * @return upb
     */
    public function setWarehouseDrop($warehouseDrop)
    {
        $this->warehouseDrop = $warehouseDrop;

        return $this;
    }

    /**
     * Get warehouseDrop
     *
     * @return string
     */
    public function getWarehouseDrop()
    {
        return $this->warehouseDrop;
    }

    /**
     * Set dropPoint
     *
     * @param string $dropPoint
     *
     * @return upb
     */
    public function setDropPoint($dropPoint)
    {
        $this->dropPoint = $dropPoint;

        return $this;
    }

    /**
     * Get dropPoint
     *
     * @return string
     */
    public function getDropPoint()
    {
        return $this->dropPoint;
    }

    /**
     * Set currentLocation
     *
     * @param string $currentLocation
     *
     * @return upb
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
     * @return upb
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


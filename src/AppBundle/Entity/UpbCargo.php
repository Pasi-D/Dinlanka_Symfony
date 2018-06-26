<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * UpbCargo
 *
 * @ORM\Table(name="upb_cargo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UpbCargoRepository")
 */
class UpbCargo
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
     * @ORM\Column(name="UPB_Bill_No", type="string", length=255, unique=true)
     */
    private $upbBillNo;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="WarehouseDeparture", type="string", length=255)
     */
    private $warehouseDeparture;

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
     * @ORM\Column(name="WarehouseArrive", type="string", length=255)
     */
    private $warehouseArrive;

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
     * @ORM\Column(name="CurrentStatus", type="string", length=255)
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
     * Set upbBillNo
     *
     * @param string $upbBillNo
     *
     * @return Sea_Freight
     */
    public function setSeaFreightBillNo($upbBillNo)
    {
        $this->upbBillNo = $upbBillNo;

        return $this;
    }

    /**
     * Get upbBillNo
     *
     * @return string
     */
    public function getupbBillNo()
    {
        return $this->upbBillNo;
    }


    /**
     * Set warehouseDeparture
     *
     * @param string $warehouseDeparture
     *
     * @return UpbCargo
     */
    public function setWarehouseDeparture($warehouseDeparture)
    {
        $this->warehouseDeparture = $warehouseDeparture;

        return $this;
    }

    /**
     * Get warehouseDeparture
     *
     * @return string
     */
    public function getWarehouseDeparture()
    {
        return $this->warehouseDeparture;
    }

    /**
     * Set departureDate
     *
     * @param \DateTime $departureDate
     *
     * @return UpbCargo
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
     * Set warehouseArrive
     *
     * @param string $warehouseArrive
     *
     * @return UpbCargo
     */
    public function setWarehouseArrive($warehouseArrive)
    {
        $this->warehouseArrive = $warehouseArrive;

        return $this;
    }

    /**
     * Get warehouseArrive
     *
     * @return string
     */
    public function getWarehouseArrive()
    {
        return $this->warehouseArrive;
    }

    /**
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     *
     * @return UpbCargo
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
     * @return UpbCargo
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


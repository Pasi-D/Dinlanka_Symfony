<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UPB
 *
 * @ORM\Table(name="u_p_b")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UPBRepository")
 */
class UPB
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
     * @ORM\Column(name="UPB_Bill_No", type="string", length=255, unique=true)
     */
    private $upbBillNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Pickup_Point", type="string", length=255)
     */
    private $pickupPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="Warehouse_Pick", type="string", length=255)
     */
    private $warehousePick;

    /**
     * @var string
     *
     * @ORM\Column(name="Port_Deparure", type="string", length=255)
     */
    private $portDeparure;

    /**
     * @var string
     *
     * @ORM\Column(name="Port_Arrive", type="string", length=255)
     */
    private $portArrive;

    /**
     * @var string
     *
     * @ORM\Column(name="Warehouse_Drop", type="string", length=255)
     */
    private $warehouseDrop;

    /**
     * @var string
     *
     * @ORM\Column(name="Drop_Point", type="string", length=255)
     */
    private $dropPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="Current_Status", type="string", length=255)
     */
    private $currentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;


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
     * @return UPB
     */
    public function setUpbBillNo($upbBillNo)
    {
        $this->upbBillNo = $upbBillNo;

        return $this;
    }

    /**
     * Get upbBillNo
     *
     * @return string
     */
    public function getUpbBillNo()
    {
        return $this->upbBillNo;
    }

    /**
     * Set pickupPoint
     *
     * @param string $pickupPoint
     *
     * @return UPB
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
     * @return UPB
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
     * Set portDeparure
     *
     * @param string $portDeparure
     *
     * @return UPB
     */
    public function setPortDeparure($portDeparure)
    {
        $this->portDeparure = $portDeparure;

        return $this;
    }

    /**
     * Get portDeparure
     *
     * @return string
     */
    public function getPortDeparure()
    {
        return $this->portDeparure;
    }

    /**
     * Set portArrive
     *
     * @param string $portArrive
     *
     * @return UPB
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
     * @return UPB
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
     * @return UPB
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
     * Set currentStatus
     *
     * @param string $currentStatus
     *
     * @return UPB
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
     * Set description
     *
     * @param string $description
     *
     * @return UPB
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
}


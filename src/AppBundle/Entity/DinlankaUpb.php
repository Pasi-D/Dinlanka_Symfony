<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DinlankaUpb
 *
 * @ORM\Table(name="dinlanka_upb")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DinlankaUpbRepository")
 */
class DinlankaUpb
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
    private $uPBBillNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Dinlanka_UPB_BillNo", type="string", length=255, unique=true)
     */
    private $dinlankaUPBBillNo;


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
     * Set uPBBillNo
     *
     * @param string $uPBBillNo
     *
     * @return DinlankaUpb
     */
    public function setUPBBillNo($uPBBillNo)
    {
        $this->uPBBillNo = $uPBBillNo;

        return $this;
    }

    /**
     * Get uPBBillNo
     *
     * @return string
     */
    public function getUPBBillNo()
    {
        return $this->uPBBillNo;
    }

    /**
     * Set dinlankaUPBBillNo
     *
     * @param string $dinlankaUPBBillNo
     *
     * @return DinlankaUpb
     */
    public function setDinlankaUPBBillNo($dinlankaUPBBillNo)
    {
        $this->dinlankaUPBBillNo = $dinlankaUPBBillNo;

        return $this;
    }

    /**
     * Get dinlankaUPBBillNo
     *
     * @return string
     */
    public function getDinlankaUPBBillNo()
    {
        return $this->dinlankaUPBBillNo;
    }
}


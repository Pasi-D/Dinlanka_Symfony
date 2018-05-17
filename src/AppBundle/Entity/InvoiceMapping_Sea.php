<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * InvoiceMapping_Sea
 *
 * @ORM\Table(name="invoice_mapping__sea")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvoiceMapping_SeaRepository")
 */
class InvoiceMapping_Sea
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
     * @ORM\Column(name="Bill_id", type="string", length=255, unique=true)
     */
    private $billId;

    /**
     * @var string
     *
     * @ORM\Column(name="dinLankaBill_id", type="string", length=255, unique=true)
     */
    private $dinLankaBillId;


    /**
     * @ORM\OneToOne(targetEntity="sea_freight", mappedBy="invoicemapping_sea")
     */
    private $sea_freight;

    public function __construct()
    {
        $this->sea_freight = new ArrayCollection();

    }
    

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
     * Set billId
     *
     * @param string $billId
     *
     * @return InvoiceMapping_Sea
     */
    public function setBillId($billId)
    {
        $this->billId = $billId;

        return $this;
    }

    /**
     * Get billId
     *
     * @return string
     */
    public function getBillId()
    {
        return $this->billId;
    }

    /**
     * Set dinLankaBillId
     *
     * @param string $dinLankaBillId
     *
     * @return InvoiceMapping_Sea
     */
    public function setDinLankaBillId($dinLankaBillId)
    {
        $this->dinLankaBillId = $dinLankaBillId;

        return $this;
    }

    /**
     * Get dinLankaBillId
     *
     * @return string
     */
    public function getDinLankaBillId()
    {
        return $this->dinLankaBillId;
    }
}


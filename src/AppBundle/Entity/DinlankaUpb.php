<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * DinLankaUPB
 *
 * @ORM\Table(name="DinLanka_UPB")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DinLankaUpbRepository")
 */
class DinLankaUPB
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
     * @ORM\Column(name="UPBBillNumber", type="string", length=255, unique=true)
     */
    private $upbBillNumber;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 8,minMessage = "Minimum Length of the Bill Number is 8")
     * @Assert\Regex(pattern="/^DIN/", message="Bill Number Starts with DIN")
     * @ORM\Column(name="DinlankaupbBillNumber", type="string", length=255, unique=true)
     */
    private $dinlankaUPBBillNumber;

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
     * @param string $saeFreightBillNumber
     *
     * @return DinLankaUPB
     */
    public function setupbBillNumber($upbBillNumber)
    {
        $this->upbBillNumber = $upbBillNumber;

        return $this;
    }

    /**
     * Get upbBillNumber
     *
     * @return string
     */
    public function getUPBBillNumber()
    {
        return $this->upbBillNumber;
    }

    /**
     * Set dinlankaUPBBillNumber
     *
     * @param string $dinlankaUPBBillNumber
     *
     * @return DinLankaUPB
     */
    public function setDinlankaUPBBillNumber($dinlankaUPBBillNumber)
    {
        $this->dinlankaUPBBillNumber = $dinlankaUPBBillNumber;

        return $this;
    }

    /**
     * Get dinlankaUPBBillNumber
     *
     * @return string
     */
    public function getDinlankaUPBBillNumber()
    {
        return $this->dinlankaUPBBillNumber;
    }

    /**
     * Set delivered
     *
     * @param boolean $delivered
     *
     * @return DinLankaUPB
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


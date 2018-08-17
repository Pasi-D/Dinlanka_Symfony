<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Quotation
 *
 * @ORM\Table(name="quotation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuotationRepository")
 */
class Quotation
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
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Company_Name", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 8, max = 20, minMessage = "Minimum Length of the telephone no is 8", maxMessage = "The Maximum length of the telephone no is 20")
     * @Assert\Regex(pattern="/^[0-9]*$/", message="Telephone No. contains Numbers only")
     * @ORM\Column(name="Contact_Number", type="string", length=255)
     */
    private $contactNumber;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Origin", type="string", length=255)
     */
    private $origin;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Transportation_Mode", type="string", length=255)
     */
    private $transportationMode;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Description", type="string", length=255, unique=true)
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
     * Set name
     *
     * @param string $name
     *
     * @return Quotation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Quotation
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Quotation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contactNumber
     *
     * @param string $contactNumber
     *
     * @return Quotation
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Get contactNumber
     *
     * @return string
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Set origin
     *
     * @param string $origin
     *
     * @return Quotation
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set transportationMode
     *
     * @param string $transportationMode
     *
     * @return Quotation
     */
    public function setTransportationMode($transportationMode)
    {
        $this->transportationMode = $transportationMode;

        return $this;
    }

    /**
     * Get transportationMode
     *
     * @return string
     */
    public function getTransportationMode()
    {
        return $this->transportationMode;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get $description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}


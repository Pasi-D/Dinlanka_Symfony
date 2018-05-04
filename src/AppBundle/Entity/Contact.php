<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;



/**
 * contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contactRepository")
 */
class Contact
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
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;
    
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = false
     * )
     * @ORM\Column(name="Email_address", type="string", length=255)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 8, max = 20, minMessage = "min_lenght", maxMessage = "max_lenght")
     * @Assert\Regex(pattern="/^[0-9]*$/", message="number_only")     
     * @ORM\Column(name="Phone_Number", type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="Your_Message", type="string", length=255)
     */
    private $yourMessage;


    /**
     * Get id
     *
     * @return integer
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
     * @return contact
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
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return contact
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return contact
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set yourMessage
     *
     * @param string $yourMessage
     *
     * @return contact
     */
    public function setYourMessage($yourMessage)
    {
        $this->yourMessage = $yourMessage;
    
        return $this;
    }

    /**
     * Get yourMessage
     *
     * @return string
     */
    public function getYourMessage()
    {
        return $this->yourMessage;
    }
}


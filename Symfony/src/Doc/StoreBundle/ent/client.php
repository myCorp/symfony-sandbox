<?php 

//src/Doc/StoreBundle/Entity/client.php
namespace Doc\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
*@ORM\Entity(repositoryClass="Doc\StoreBundle\Entity\clientRepository")
*/
class client
{
	/**
	*@ORM\Id
	*@ORM\Column(type="integer", unique=true)
	*@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $clientNO;

	/**
	*@ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $firstName;

	/**
	*@ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $lastName;

	/**
	*@ORM\Column(type="string", length=64, nullable=true)
	*/
	protected $address;

	/**
	*@ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $phone;

	/**
	*@ORM\Column(type="string", length=32, nullable=true)
	*/
	protected $mail;

    /**
    *@ORM\OneToMany(targetEntity="pet", mappedBy="clipet")
    */
    protected $pet;



    /**
    *@ORM\OneToMany(targetEntity="reception", mappedBy="clirec")
    */
    protected $reception;

    public function __construct() {
        $this->pet = new ArrayCollection();
        $this->reception = new ArrayCollection();        
    }

    /**
     * Get clientNO
     *
     * @return integer 
     */
    public function getClientNO()
    {
        return $this->clientNO;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return client
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return client
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Add pet
     *
     * @param \Doc\StoreBundle\Entity\pet $pet
     * @return client
     */
    public function addPet(\Doc\StoreBundle\Entity\pet $pet)
    {
        $this->pet[] = $pet;

        return $this;
    }

    /**
     * Remove pet
     *
     * @param \Doc\StoreBundle\Entity\pet $pet
     */
    public function removePet(\Doc\StoreBundle\Entity\pet $pet)
    {
        $this->pet->removeElement($pet);
    }

    /**
     * Get pet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPet()
    {
        return $this->pet;
    }

    /**
     * Add reception
     *
     * @param \Doc\StoreBundle\Entity\reception $reception
     * @return client
     */
    public function addReception(\Doc\StoreBundle\Entity\reception $reception)
    {
        $this->reception[] = $reception;

        return $this;
    }

    /**
     * Remove reception
     *
     * @param \Doc\StoreBundle\Entity\reception $reception
     */
    public function removeReception(\Doc\StoreBundle\Entity\reception $reception)
    {
        $this->reception->removeElement($reception);
    }

    /**
     * Get reception
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReception()
    {
        return $this->reception;
    }
}

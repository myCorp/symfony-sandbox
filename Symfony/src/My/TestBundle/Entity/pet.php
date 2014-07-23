<?php 
//src/My/TestBundle/Entity/pet.php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
*@ORM\Entity
*@ORM\Table(name="pet")
*/
class pet
{
	/**
	*@ORM\Id
	*@ORM\Column(type="integer", unique=true)
	*@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	*@ORM\Id Column(type="integer")
	*/
	protected $clientID;

	/**
	*@ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $nickname;

	/**
	*@ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $breed;

	/**
	*@ORM\Column(type="integer", nullable=true)
	*/
	protected $age;

	/**
	*@ORM\ManyToOne(targetEntity="client")
	*@ORM\JoinColumn(name="clientID",referencedColumnName="clientNO")
	*/
	protected $clipet;

    public function __construct() {
        $this->clipet = new ArrayCollection();        
    }

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
     * Set nickname
     *
     * @param string $nickname
     * @return pet
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set breed
     *
     * @param string $breed
     * @return pet
     */
    public function setBreed($breed)
    {
        $this->breed = $breed;

        return $this;
    }

    /**
     * Get breed
     *
     * @return string 
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return pet
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set clipet
     *
     * @param \My\TestBundle\Entity\client $clipet
     * @return pet
     */
    public function setClipet(\My\TestBundle\Entity\client $clipet = null)
    {
        $this->clipet = $clipet;

        return $this;
    }

    /**
     * Get clipet
     *
     * @return \My\TestBundle\Entity\client 
     */
    public function getClipet()
    {
        return $this->clipet;
    }
}

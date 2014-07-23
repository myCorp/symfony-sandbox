<?php 
//src/My/TestBundle/Entity/veterinarian.php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity
*@ORM\Table(name="veterinarian")
*/
class veterinarian
{
	/**
	*@ORM\Id
	*@ORM\Column(type="integer", unique=true)
	*@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	*@ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $name;

	/**
	*@ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $profession;

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
     * @return veterinarian
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
     * Set profession
     *
     * @param string $profession
     * @return veterinarian
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string 
     */
    public function getProfession()
    {
        return $this->profession;
    }
}

<?php 

//src/Doc/StoreBundle/Entity/pc_veterinarian.php
namespace Doc\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*ORM\Entity
*ORM\Table(name="veterinarian")
*/
class veterinarian
{
	/**
	*ORM\Id
	*ORM\Column(type="integer", unique=true)
	*ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	*ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $name;

	/**
	*ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $profession;
}
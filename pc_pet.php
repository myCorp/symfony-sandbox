<?php 

//src/Doc/StoreBundle/Entity/pc_pet.php
namespace Doc\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*ORM\Entity
*ORM\Table(name="pet")
*/
class pet
{
	/**
	*ORM\Id
	*ORM\Column(type="integer", unique=true)
	*ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	*ORM\Id
	*ORM\Column(type="integer")
	*ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $clientID;

	/**
	*ORM\Column(type="string", length=16)
	*/
	protected $nickname;

	/**
	*ORM\Column(type="string", length=16)
	*/
	protected $breed;

	/**
	*ORM\Column(type="integer")
	*/
	protected $age;
}
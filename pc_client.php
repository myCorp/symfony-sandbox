<?php 

//src/Doc/StoreBundle/Entity/pc_client.php
namespace Doc\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*ORM\Entity
*ORM\Table(name="client")
*/
class client
{
	/**
	*ORM\Id
	*ORM\Column(type="integer", unique=true)
	*ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $clientID;

	/**
	*ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $firstName;

	/**
	*ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $lastName;

	/**
	*ORM\Column(type="string", length=64, nullable=true)
	*/
	protected $address;

	/**
	*ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $phone;

	/**
	*ORM\Column(type="string", length=32, nullable=true)
	*/
	protected $mail;
}
<?php 

//src/Doc/StoreBundle/Entity/pc_reception.php
namespace Doc\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*ORM\Entity
*ORM\Table(name="reception")
*/
class reception
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
	protected $date;

	/**
	*ORM\Column(type="string", length=64, nullable=true)
	*/
	protected $start_time_reception;

	/**
	*ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $end_time_reception;

	/**
	*ORM\Column(type="string", length=128, nullable=true)
	*/
	protected $symptoms;

	/**
	*ORM\Column(type="string", length=512, nullable=true)
	*/
	protected $comment;

	/**
	*ORM\Column(type="integer")
	*/
	protected $doctor_id;

	/**
	*ORM\Column(type="string", length=16)
	*/
	protected $doctor_name;

	/**
	*ORM\Column(type="integer", nullable=true)
	*/
	protected $status;
}
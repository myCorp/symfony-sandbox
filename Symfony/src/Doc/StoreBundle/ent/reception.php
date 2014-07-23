<?php 

//src/Doc/StoreBundle/Entity/reception.php
namespace Doc\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity(repositoryClass="Doc\StoreBundle\Repository\receptionRepository")
*@ORM\Table(name="reception")
*/
class reception
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
	*@ORM\Column(type="string", length=16)
	*/
	protected $date;

	/**
	*@ORM\Column(type="string", length=64, nullable=true)
	*/
	protected $start_time_reception;

	/**
	*@ORM\Column(type="string", length=16, nullable=true)
	*/
	protected $end_time_reception;

	/**
	*@ORM\Column(type="string", length=128, nullable=true)
	*/
	protected $symptoms;

	/**
	*@ORM\Column(type="string", length=512, nullable=true)
	*/
	protected $comment;

	/**
	*@ORM\Id Column(type="integer")
	*/
	protected $doctor_id;

	/**
	*@ORM\Column(type="string", length=16)
	*/
	protected $doctor_name;

	/**
	*@ORM\Column(type="integer", nullable=true)
	*/
	protected $status;

	/**
	*@ORM\ManyToOne(targetEntity="client", inversedBy="reception")
	*@ORM\JoinColumn(name="clientID",referencedColumnName="clientNO")
	*/
	protected $clirec;

	/**
	*@ORM\OneToOne(targetEntity="veterinarian", inversedBy="id")
	*@ORM\JoinColumn(name="doctor_id",referencedColumnName="id")
	*/
	protected $docid;

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
     * Set date
     *
     * @param string $date
     * @return reception
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set start_time_reception
     *
     * @param string $startTimeReception
     * @return reception
     */
    public function setStartTimeReception($startTimeReception)
    {
        $this->start_time_reception = $startTimeReception;

        return $this;
    }

    /**
     * Get start_time_reception
     *
     * @return string 
     */
    public function getStartTimeReception()
    {
        return $this->start_time_reception;
    }

    /**
     * Set end_time_reception
     *
     * @param string $endTimeReception
     * @return reception
     */
    public function setEndTimeReception($endTimeReception)
    {
        $this->end_time_reception = $endTimeReception;

        return $this;
    }

    /**
     * Get end_time_reception
     *
     * @return string 
     */
    public function getEndTimeReception()
    {
        return $this->end_time_reception;
    }

    /**
     * Set symptoms
     *
     * @param string $symptoms
     * @return reception
     */
    public function setSymptoms($symptoms)
    {
        $this->symptoms = $symptoms;

        return $this;
    }

    /**
     * Get symptoms
     *
     * @return string 
     */
    public function getSymptoms()
    {
        return $this->symptoms;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return reception
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set doctor_name
     *
     * @param string $doctorName
     * @return reception
     */
    public function setDoctorName($doctorName)
    {
        $this->doctor_name = $doctorName;

        return $this;
    }

    /**
     * Get doctor_name
     *
     * @return string 
     */
    public function getDoctorName()
    {
        return $this->doctor_name;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return reception
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set clirec
     *
     * @param \Doc\StoreBundle\Entity\client $clirec
     * @return reception
     */
    public function setClirec(\Doc\StoreBundle\Entity\client $clirec = null)
    {
        $this->clirec = $clirec;

        return $this;
    }

    /**
     * Get clirec
     *
     * @return \Doc\StoreBundle\Entity\client 
     */
    public function getClirec()
    {
        return $this->clirec;
    }

    /**
     * Set docid
     *
     * @param \Doc\StoreBundle\Entity\veterinarian $docid
     * @return reception
     */
    public function setDocid(\Doc\StoreBundle\Entity\veterinarian $docid = null)
    {
        $this->docid = $docid;

        return $this;
    }

    /**
     * Get docid
     *
     * @return \Doc\StoreBundle\Entity\veterinarian 
     */
    public function getDocid()
    {
        return $this->docid;
    }
}

<?php
// src/My/TestBundle/Controller/ReceptionController.php

namespace My\TestBundle\Controller;

use My\TestBundle\Entity\reception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;

class ReceptionController extends Controller
{
	public function showReceptionAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
    	$results = $em->getRepository('MyTestBundle:reception')
                ->findReception();

        if (!$results) {
        throw $this->createNotFoundException('No product found for Reception ');
    	}

        foreach ($results as $obj) { echo json_encode((array)$obj); }

 		$response = new Response();
 		$response->headers->set('Content-Type', 'application/json');
 		return $response;

	}

	public function showAllReceptionAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
    	$results = $em->getRepository('MyTestBundle:reception')
                ->findAllReception();

        if (!$results) {
        throw $this->createNotFoundException('No product found for Reception ');
    	}
    	return $this->render('MyTestBundle:Reception:validate.html.twig', array(
        'results' => $results,
    )); 
            

	}

	public function createReceptionAction()
	{
    	$reception = new reception();
   	//	$reception->setdocid('1');
    	$reception->setDate('29-07');
    	$reception->setStartTimeReception('11:00');
    	$reception->setEndTimeReception('12:00');
    	$reception->setsymptoms('his died');
    	$reception->setcomment('y');
    	$reception->setDoctorName('Volosya S');
    //	$reception->setClirec('2');
       	$reception->setStatus('2');

    	$em = $this->getDoctrine()->getEntityManager();
    	$em->persist($reception);
   	 $em->flush();

    	return new Response('Created product id '.$reception->getid());

	}

	public function editReception()
	{

	}

	public function deleteReception()
	{

	}

}
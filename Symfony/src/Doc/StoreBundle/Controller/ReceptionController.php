<?php
// src/Doc/StoreBundle/Controller/ReceptionController.php

namespace Doc\StoreBundle\Controller;

use Doc\StoreBundle\Entity\reception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReceptionController extends Controller
{
	public function showReceptionAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
    	$results = $em->getRepository('DocStoreBundle:reception')
                ->findReception();

        if (!$results) {
        throw $this->createNotFoundException('No product found for id ');
    	}


        foreach ($results as $obj) { echo json_encode((array)$obj); }

 		$response = new Response(json_encode((array)$obj));
 		$response->headers->set('Content-Type', 'application/json');
 		return $response;

	}

	public function showAllReception()
	{

	}

	public function createReception()
	{

	}

	public function editReception()
	{

	}

	public function deleteReception()
	{

	}

}
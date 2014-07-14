<?php
// src/Doc/StoreBundle/Controller/DefaultController.php

namespace Doc\StoreBundle\Controller;

use Doc\StoreBundle\Entity\client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($firstName)
    {
        return $this->render('DocStoreBundle:Default:index.html.twig', array('name' => $firstName));
    }

    public function createAction()
	{
    $client = new client();
    $client->setfirstName('qqqwwe');
    $client->setlastname('zxczxc');
    $client->setaddress('nin');
    $client->setphone('67890');
    $client->setmail('qqqwwe@mail.ru');

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($client);
    $em->flush();

    	return new Response('Created product id '.$client->getClientID());
	}

    public function showAction($ClientID)
    {
    $product = $this->getDoctrine()
        ->getRepository('DocStoreBundle:client')
        ->find($ClientID);

    if (!$product) {
        throw $this->createNotFoundException('No product found for id '.$ClientID);
    }

    return new Response('You id is '.$ClientID);
    }

    public function updateAction($id)
    {
    $em = $this->getDoctrine()->getEntityManager();
    $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);

    if (!$product) {
        throw $this->createNotFoundException('No product found for id '.$id);
    }

    $product->setName('New product name!');
    $em->flush();

    return $this->redirect($this->generateUrl('homepage'));
    }

    public function queryAction()

    {   
    $em = $this->getDoctrine()->getEntityManager();
    $results = $em->getRepository('DocStoreBundle:client')
                ->findAllOrderedByName();

foreach($results as $obj) { echo json_encode((array)$obj); }

return new Response((array)$obj);


    }   
    
}

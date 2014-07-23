<?php
// src/My/TestBundle/Controller/DefaultController.php

namespace My\TestBundle\Controller;

use My\TestBundle\Entity\client;
use My\TestBundle\Entity\pet;
use My\TestBundle\Entity\veterinarian;
use My\TestBundle\Entity\reception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($firstName)
    {
        return $this->render('MyTestBundle:Default:index.html.twig', array('name' => $firstName));
    }

    public function createAction()
	{
    $client = new client();
    $client->setfirstName('qweqwe');
    $client->setlastname('asasd');
    $client->setaddress('moskow');
    $client->setphone('67889');
    $client->setmail('zxzxc@mail.ru');
    $client->addReception();

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($client);
    $em->flush();

    	return new Response('Created product id '.$client->getClientNO());
	}

    public function showAction($ClientNO)
    {
    $product = $this->getDoctrine()
        ->getRepository('MyTestBundle:client')
        ->find($ClientNO);

    if (!$product) {
        throw $this->createNotFoundException('No product found for id '.$ClientNO);
    }

    return new Response('You id is '.$ClientNO);
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
    $results = $em->getRepository('MyTestBundle:client')
                ->findAllOrderedByName();

foreach ($results as $obj) { echo json_encode((array)$obj); }

 $response = new Response(json_encode((array)$obj));
 $response->headers->set('Content-Type', 'application/json');
 return $response;

    }

    public function createDocAction()
	{
    $veterinarian = new veterinarian();
    $veterinarian->setname('Volodya S');
    $veterinarian->setprofession('doctor');

        $em = $this->getDoctrine()->getEntityManager();
    $em->persist($veterinarian);
    $em->flush();

    	return new Response('Created product name '.$veterinarian->getname());
	}

	 public function createPetAction()
	{
    $pet = new pet();
    $pet->setnickname('boris');
    $pet->setbreed('cat');
    $pet->setage('6');
    $pet->getClipet('1');

        $em = $this->getDoctrine()->getEntityManager();
    $em->persist($pet);
    $em->flush();

    	return new Response('Created product pet '.$pet->getnickname());
	}


}
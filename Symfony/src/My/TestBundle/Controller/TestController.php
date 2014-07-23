<?php

// src/My/TestBundle/Controller/TestController.php

namespace My\TestBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class TestController extends Controller
{
    public function indexAction($name,$color)
    {
      return new Response('<html><body>Hello '.$name.$color.'!</body></html>');
    }
}
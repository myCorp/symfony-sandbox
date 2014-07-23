<?php
// src/Demos/BlogBundle/Controller/BlogController.php

namespace Demos\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function listAction()
    {
        $posts = $this->get('doctrine')->getEntityManager()
            ->createQuery('SELECT p FROM DemosBlogBundle:Post p')
            ->execute();

        return $this->render('DemosBlogBundle:Blog:list.html.twig', array('posts' => $posts));
    }

    public function showAction($id)
    {
        $post = $this->get('doctrine')
            ->getEntityManager()
            ->getRepository('DemosBlogBundle:Post')
            ->find($id);

        if (!$post) {
            // cause the 404 page not found to be displayed
            throw $this->createNotFoundException();
        }

        return $this->render('DemosBlogBundle:Blog:show.html.php', array('post' => $post));
    }
}

echo 3;
<?php

namespace Blogger\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	/**
	 * @Route("/")
	 * @Method("GET")
	 * @return Response
	 */
    public function indexAction()
    {
		return new Response("index action");
    }

	/**
	 * @Route("/hello/{name}")
	 * @param $name
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
    public function displayName($name)
    {
        return $this->render('BloggerBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}

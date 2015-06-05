<?php

namespace Blogger\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller
{
    /**
     * @Route("/about")
     * @Template()
     * @Method("GET")
     */
    public function aboutAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/main")
     * @Template()
     */
    public function mainAction()
    {
        return array(
                // ...
            );    }

}

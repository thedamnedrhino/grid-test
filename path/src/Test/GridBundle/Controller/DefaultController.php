<?php

namespace Test\GridBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestGridBundle:Default:index.html.twig', array('name' => $name));
    }
}

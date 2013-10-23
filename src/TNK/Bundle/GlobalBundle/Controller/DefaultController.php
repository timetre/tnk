<?php

namespace TNK\Bundle\GlobalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TNKGlobalBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace TNK\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TNKUserBundle:Default:index.html.twig', array('name' => $name));
    }
}

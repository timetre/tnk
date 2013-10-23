<?php

namespace TNK\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TNKAdminBundle:Default:index.html.twig');
    }
}

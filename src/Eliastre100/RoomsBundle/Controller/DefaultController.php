<?php

namespace Eliastre100\RoomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Eliastre100RoomsBundle:Default:index.html.twig', array('name' => $name));
    }
}

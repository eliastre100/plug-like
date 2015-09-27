<?php

namespace Eliastre100\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function indexAction()
    {
        return $this->render('Eliastre100HomeBundle:Pages:index.html.twig');
    }
}

<?php

namespace Eliastre100\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('Eliastre100DashboardBundle:Dashboard:index.html.twig');
    }
}

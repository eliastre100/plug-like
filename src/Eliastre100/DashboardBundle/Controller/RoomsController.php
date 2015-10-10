<?php

namespace Eliastre100\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoomsController extends Controller
{
    public function createAction()
    {
        return $this->render('Eliastre100DashboardBundle:Rooms:create.html.twig');
    }
}

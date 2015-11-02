<?php

namespace Eliastre100\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eliastre100\RoomBundle\Entity\RoomRepository;

class DashboardController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$rooms = $em->getRepository('Eliastre100RoomsBundle:Room')->findall();
        return $this->render('Eliastre100DashboardBundle:Dashboard:index.html.twig', array("rooms" => $rooms));
    }
}

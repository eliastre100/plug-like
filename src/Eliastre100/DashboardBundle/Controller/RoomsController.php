<?php

namespace Eliastre100\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eliastre100\DashboardBundle\Form\Type\CreateType;
use Eliastre100\RoomsBundle\Entity\Room;
use Symfony\Component\HttpFoundation\Request;

class RoomsController extends Controller
{
    public function createAction(Request $request)
    {
        $room = new Room();
        $form = $this->createForm(new CreateType(), $room);

        $form->handleRequest($request);
        if ($form->isValid()) {
            try {
                $room->setOwner($this->get('security.context')->getToken()->getUser()->getUsername());
                $room->setTag(uniqid());
                $em = $this->getDoctrine()->getManager();
                $em->persist($room);
                $em->flush();
                return $this->render('Eliastre100DashboardBundle:Rooms:create.success.html.twig', array("name" => $room->getName()));
            } catch (Exception $e) {
                throw new Symfony\Component\HttpKernel\Exception\HttpException(500, "Something went wrong!");
            }
        }
        return $this->render('Eliastre100DashboardBundle:Rooms:create.html.twig', array('form' => $form->createView()));
    }
}

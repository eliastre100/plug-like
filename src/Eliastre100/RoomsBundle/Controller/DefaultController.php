<?php

namespace Eliastre100\RoomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eliastre100\RoomsBundle\Entity\Playlist;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $room = array("name" => $name);
        $task = new Playlist();
        $form = $this->createFormBuilder($task)
            ->setAction($this->generateUrl('eliastre100_playlist_create'))
            ->add('name', 'text')
            ->add('save', 'submit', array('label' => 'Create Playlist'))
            ->getForm();
        return $this->render('Eliastre100RoomsBundle:Room:base.html.twig', array('room' => $room, 'form' => $form->createView()));
    }
}

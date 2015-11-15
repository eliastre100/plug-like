<?php

namespace Eliastre100\RoomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eliastre100\RoomsBundle\Entity\Playlist;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $task = new Playlist();
        $form = $this->createFormBuilder($task)
            ->setAction($this->generateUrl('eliastre100_playlist_create'))
            ->add('name', 'text')
            ->add('save', 'submit', array('label' => 'Create Playlist'))
            ->getForm();
        return $this->render('Eliastre100RoomsBundle:Default:index.html.twig', array('name' => $name, 'form' => $form->createView()));
    }
}

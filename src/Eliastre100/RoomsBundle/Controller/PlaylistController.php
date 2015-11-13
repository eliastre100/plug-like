<?php

namespace Eliastre100\RoomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Eliastre100\RoomsBundle\Entity\Playlist;
use Eliastre100\RoomsBundle\Entity\PlaylistMusics;

class PlaylistController extends Controller
{
	public function createAction(Request $request)
	{
		$playlist = new Playlist();
        $form = $this->createFormBuilder($playlist)
        	->setAction($this->generateUrl('eliastre100_playlist_create'))
            ->add('name', 'text')
            ->add('save', 'submit', array('label' => 'Create Playlist'))
            ->getForm();
        $form->handleRequest($request);
    	if ($form->isValid()) {
    		$playlist->setPid(uniqid());
    		$playlist->setSize(0);
    		$playlist->setOwner($usr= $this->get('security.context')->getToken()->getUser());
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($playlist);
    		$em->flush();
				return new JsonResponse(array('status' => 'success'));
    	}
    	return new JsonResponse(array('status' => 'fail'));
	}
}

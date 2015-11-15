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
    		$playlist->setOwner($this->get('security.context')->getToken()->getUser());
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($playlist);
    		$em->flush();
				return new JsonResponse(array('status' => 'success'));
    	}
    	return new JsonResponse(array('status' => 'fail'));
	}

	public function getPlaylistsAction()
	{
		$playlists_public = array();
		$em = $this->getDoctrine()->getManager();
		$playlists = $em
            ->getRepository('Eliastre100RoomsBundle:Playlist')
            ->findBy(array('owner' => $this->get('security.context')->getToken()->getUser()));
		foreach($playlists as $k => $v)
		{
			$playlists_public[] = array("name" => $v->getName(), "pid" => $v->getPid(), "size" => $v->getSize());
		}
		return new JsonResponse($playlists_public);
	}

	public function selectPlaylistAction($pid)
	{
		$em = $this->getDoctrine()->getManager();
		$playlist = $em
            ->getRepository('Eliastre100RoomsBundle:Playlist')
            ->findOneBy(array('pid' => $pid));
		$this->get('security.context')->getToken()->getUser()->setCurrentPlaylist($playlist);
		$em->flush();
		return new JsonResponse(array('status' => 'success'));
	}

	public function getCurrentPlaylistAction()
	{
		$playlist = $this->get('security.context')->getToken()->getUser()->getCurrentPlaylist();
		return new JsonResponse(array('name' => $playlist->getName(), "pid" => $playlist->getPid()));
	}
}

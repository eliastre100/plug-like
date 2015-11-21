<?php

namespace Eliastre100\RoomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Eliastre100\RoomsBundle\Entity\Music;
use Eliastre100\RoomsBundle\Entity\PlaylistMusics;

class VideoController extends Controller
{
    public function AddMusicAction()
    {
        $client = new \Google_Client();
        $client->setDeveloperKey($this->container->getParameter('googleapi_server'));
        $youtube = new \Google_Service_YouTube($client);
        $searchResponse = $youtube->videos->listVideos("snippet, contentDetails",
            array('id' =>  $this->getRequest()->request->get('id') , 'maxResults' => 1));

        $music = new Music();
        $music->setName($searchResponse['modelData']['items'][0]['snippet']['title']);
        $music->setType("youtube");
        $music->setStreamKey($searchResponse['modelData']['items'][0]['id']);
        $music->setThumbnail($searchResponse['modelData']['items'][0]['snippet']['thumbnails']['default']['url']);

        $playlist = $this->get('security.context')->getToken()->getUser()->getCurrentPlaylist();
        $playlist->setSize($playlist->getSize() + 1);

        $musics = new PlaylistMusics();
        $musics->setMusic($music);
        $musics->setPosition($playlist->getSize());

        $playlist->addMusics($musics);

        $em = $this->getDoctrine()->getManager();
        $em->persist($musics);
        $em->flush();
        return new JsonResponse(array('status' => 'success'));
    }
}

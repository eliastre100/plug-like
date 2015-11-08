<?php

namespace Eliastre100\RoomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	 $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('send@example.com')
        ->setTo('recipient@example.com')
        ->setBody('You should see me from the profiler!')
    ;

    $this->get('mailer')->send($message);
        return $this->render('Eliastre100RoomsBundle:Default:index.html.twig', array('name' => $name));
    }
}

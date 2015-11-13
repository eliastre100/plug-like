<?php
// src/AppBundle/Entity/User.php

namespace Eliastre100\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\OneToOne(targetEntity="Eliastre100\RoomsBundle\Entity\Playlist", cascade={"persist"})
    */
    private $current_playlist;

    public function __construct()
    {
        parent::__construct();
    }

    public function setCurrentPlaylist(Playlist $playlist = null)
    {
      $this->current_playlist = $playlist;
    }

    public function getCurrentPlaylist()
    {
      return $this->current_playlist;
    }
}

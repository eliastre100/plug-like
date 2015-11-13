<?php

namespace Eliastre100\RoomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Eliastre100\UserBundle\Entity\User;

/**
 * Playlist
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eliastre100\RoomsBundle\Entity\PlaylistRepository")
 */
class Playlist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="pid", type="string", length=255)
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Eliastre100\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @ORM\ManyToMany(targetEntity="Eliastre100\RoomsBundle\Entity\PlaylistMusics", cascade={"persist"})
     *
     */
    private $musics;

    public function __construct()
    {
        $this->musics = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Playlist
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pid
     *
     * @param string $pid
     *
     * @return Playlist
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return string
     */
    public function getPid()
    {
        return $this->pid;
    }

    public function setOwner(User $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Playlist
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set musics
     */
    public function addMusics(PlaylistMusics $music)
    {
        $this->musics[] = $music;
        return $this;
    }

    /**
     * Get musics
     */
    public function getMusics()
    {
        return $this->musics;
    }

    /**
     * Remove a music
     */
    public function removeMusics(PlaylistMusic $music)
    {
        $this->musics->removeElement($music);
    }
}

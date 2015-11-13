<?php

namespace Eliastre100\RoomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * PlaylistMusics
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eliastre100\RoomsBundle\Entity\PlaylistMusicsRepository")
 */
class PlaylistMusics
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
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @ORM\OneToOne(targetEntity="Eliastre100\RoomsBundle\Entity\Music")
     */
    private $music;
    
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
     * Set position
     *
     * @param integer $position
     *
     * @return PlaylistMusics
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     *  Set playlist musics
     */
    public function setMusics(Music $music)
    {
        $this->music = $music;
    }

    /**
     *  Get playlist musics
     **/
    public function getMusics()
    {
        return $this->music;
    }
}


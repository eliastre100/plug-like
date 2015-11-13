<?php

namespace Eliastre100\RoomsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Music
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eliastre100\RoomsBundle\Entity\MusicRepository")
 */
class Music
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="stream_key", type="string", length=255)
     */
    private $streamKey;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnail", type="string", length=255)
     */
    private $thumbnail;


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
     * @return Music
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
     * Set type
     *
     * @param string $type
     *
     * @return Music
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set streamKey
     *
     * @param string $streamKey
     *
     * @return Music
     */
    public function setStreamKey($streamKey)
    {
        $this->streamKey = $streamKey;

        return $this;
    }

    /**
     * Get streamKey
     *
     * @return string
     */
    public function getStreamKey()
    {
        return $this->streamKey;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     *
     * @return Music
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }
}


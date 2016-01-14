<?php

namespace uni\bundle\misjuegosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * tipo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class tipo
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
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;
    
    /**
    * @ORM\OneToMany(targetEntity="juego", mappedBy="tipo", cascade={"remove"})
    */
    protected $juegos;
    
    public function __construct() {
        $this->juegos = new ArrayCollection();
    }
    
    public function __toString() {
        return $this->nombre;
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
     * Set nombre
     *
     * @param string $nombre
     * @return tipo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add juegos
     *
     * @param \uni\bundle\misjuegosBundle\Entity\juego $juegos
     * @return tipo
     */
    public function addJuego(\uni\bundle\misjuegosBundle\Entity\juego $juegos)
    {
        $this->juegos[] = $juegos;

        return $this;
    }

    /**
     * Remove juegos
     *
     * @param \uni\bundle\misjuegosBundle\Entity\juego $juegos
     */
    public function removeJuego(\uni\bundle\misjuegosBundle\Entity\juego $juegos)
    {
        $this->juegos->removeElement($juegos);
    }

    /**
     * Get juegos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJuegos()
    {
        return $this->juegos;
    }
}

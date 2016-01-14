<?php

namespace uni\bundle\misjuegosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * juego
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class juego
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntuacion", type="integer")
     */
    private $puntuacion;
    
    /**
    * @ORM\ManyToOne(targetEntity="tipo", inversedBy="juegos", cascade={"remove"})    
    */
    protected $tipo;
    
    /**
    * @ORM\ManyToMany(targetEntity="plataforma", mappedBy="juegos")
    */

    private $plataformas;

    public function __construct() {
        $this->plataformas = new ArrayCollection();
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
     * @return juego
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return juego
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set puntuacion
     *
     * @param integer $puntuacion
     * @return juego
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get puntuacion
     *
     * @return integer 
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * Set tipo
     *
     * @param \uni\bundle\misjuegosBundle\Entity\tipo $tipo
     * @return juego
     */
    public function setTipo(\uni\bundle\misjuegosBundle\Entity\tipo $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \uni\bundle\misjuegosBundle\Entity\tipo 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Add plataformas
     *
     * @param \uni\bundle\misjuegosBundle\Entity\plataforma $plataformas
     * @return juego
     */
    public function addPlataforma(\uni\bundle\misjuegosBundle\Entity\plataforma $plataformas)
    {
        $this->plataformas[] = $plataformas;

        return $this;
    }

    /**
     * Remove plataformas
     *
     * @param \uni\bundle\misjuegosBundle\Entity\plataforma $plataformas
     */
    public function removePlataforma(\uni\bundle\misjuegosBundle\Entity\plataforma $plataformas)
    {
        $this->plataformas->removeElement($plataformas);
    }

    /**
     * Get plataformas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlataformas()
    {
        return $this->plataformas;
    }
}

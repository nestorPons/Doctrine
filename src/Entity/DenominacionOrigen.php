<?php

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="denominacion_origen")
 */
class DenominacionOrigen
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    private $pais;

    /**
     * Constructor de la entidad Denominacion_origen.
     * @param string $nombre
     * @param Pais $pais
     */
    public function __construct(string $nombre, Pais $pais)
    {
        $this->nombre = $nombre;
        $this->pais = $pais;
    }

    // Getters y setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getPais(): ?Pais
    {
        return $this->pais;
    }

    public function setPais(Pais $pais): void
    {
        $this->pais = $pais;
    }

    public function getNombrePais(): ?string
    {
        if ($this->pais instanceof Pais) {
            return $this->pais->getNombre();
        }
        
        return null;
    }
}

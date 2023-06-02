<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Elaboraciones
 *
 * @ORM\Table(name="elaboraciones")
 * @ORM\Entity
 */
class Elaboraciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_aux", type="string", length=200, nullable=true)
     */
    private $nombre_aux;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    private $pais;

    /**
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    private $region;

    /**
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumn(name="ciudad_id", referencedColumnName="id")
     */
    private $ciudad;

    /**
     * @ORM\ManyToOne(targetEntity="Fuente")
     * @ORM\JoinColumn(name="fuente_id", referencedColumnName="id")
     */
    private $fuente;

    /**
     * @var int
     *
     * @ORM\Column(name="valor_fuente", type="integer", nullable=false)
     */
    private $valorFuente;


    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechaCreacion = 'CURRENT_TIMESTAMP';


}

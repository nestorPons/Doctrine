<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ElaboracionesGastro
 *
 * @ORM\Table(name="elaboraciones_gastro")
 * @ORM\Entity
 */
class ElaboracionesGastro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_elaboracion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idElaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_original_elaboracion", type="string", length=200, nullable=false)
     */
    private $nombreOriginalElaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_espanyol_elaboracion", type="string", length=200, nullable=false)
     */
    private $nombreEspanyolElaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_elaboracion", type="string", length=200, nullable=false)
     */
    private $paisElaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="region_elaboracion", type="string", length=200, nullable=false)
     */
    private $regionElaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_region_elaboracion", type="string", length=200, nullable=false)
     */
    private $subRegionElaboracion;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_fuente_elaboracion", type="integer", nullable=false)
     */
    private $tipoFuenteElaboracion;

    /**
     * @var int
     *
     * @ORM\Column(name="valor_fuente_elaboracion", type="integer", nullable=false)
     */
    private $valorFuenteElaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_elaboracion", type="string", length=200, nullable=false)
     */
    private $usuarioElaboracion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_elaboracion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechaElaboracion = 'CURRENT_TIMESTAMP';


}

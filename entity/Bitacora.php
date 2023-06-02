<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Bitacora
 *
 * @ORM\Table(name="bitacora")
 * @ORM\Entity
 */
class Bitacora
{
    /**
     * @var int
     *
     * @ORM\Column(name="bit_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bitId;

    /**
     * @var string
     *
     * @ORM\Column(name="bit_accion", type="string", length=1000, nullable=false)
     */
    private $bitAccion;

    /**
     * @var string
     *
     * @ORM\Column(name="bit_detalle", type="string", length=1000, nullable=false)
     */
    private $bitDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="bit_usuario", type="string", length=50, nullable=false)
     */
    private $bitUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bit_fecha", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $bitFecha = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @ORM\Column(name="bit_sistema_id", type="boolean", nullable=false, options={"default"="1"})
     */
    private $bitSistemaId = true;


}

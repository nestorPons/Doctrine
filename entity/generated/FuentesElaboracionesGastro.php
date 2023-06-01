<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * FuentesElaboracionesGastro
 *
 * @ORM\Table(name="fuentes_elaboraciones_gastro", uniqueConstraints={@ORM\UniqueConstraint(name="idx_fuentes_gastro_elab", columns={"feg_id_elaboracion", "feg_id_fuente"})})
 * @ORM\Entity
 */
class FuentesElaboracionesGastro
{
    /**
     * @var int
     *
     * @ORM\Column(name="feg_id_fuente_elab_gastro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fegIdFuenteElabGastro;

    /**
     * @var int
     *
     * @ORM\Column(name="feg_id_elaboracion", type="integer", nullable=false)
     */
    private $fegIdElaboracion;

    /**
     * @var int
     *
     * @ORM\Column(name="feg_id_fuente", type="integer", nullable=false)
     */
    private $fegIdFuente;

    /**
     * @var int
     *
     * @ORM\Column(name="feg_valor_fuente", type="integer", nullable=false)
     */
    private $fegValorFuente;

    /**
     * @var int
     *
     * @ORM\Column(name="feg_fecha_fuente", type="integer", nullable=false)
     */
    private $fegFechaFuente;


}

<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Combinaciones
 *
 * @ORM\Table(name="combinaciones", indexes={@ORM\Index(name="id_fond_combinaciones", columns={"id_fond_combinaciones"})})
 * @ORM\Entity
 */
class Combinaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="cod_prod_a", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codProdA;

    /**
     * @var int
     *
     * @ORM\Column(name="cod_prod_b", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codProdB;

    /**
     * @var int
     *
     * @ORM\Column(name="cod_fondo", type="integer", nullable=false, options={"default"="-1","comment"="0 para combinaciones de productos;
> 0 para combinaciones de fondos;"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codFondo = -1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_fond_combinaciones", type="integer", nullable=false)
     */
    private $idFondCombinaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_creador", type="string", length=100, nullable=false)
     */
    private $usrCreador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechaCreacion = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cod_fuente_com", type="integer", nullable=true)
     */
    private $codFuenteCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fuente_valor_com", type="integer", nullable=true)
     */
    private $fuenteValorCom;


}

<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosPrincipal
 *
 * @ORM\Table(name="productos_principal")
 * @ORM\Entity
 */
class ProductosPrincipal
{
    /**
     * @var int
     *
     * @ORM\Column(name="cod_prod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codProd;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_prod", type="string", length=100, nullable=false)
     */
    private $nombreProd;

    /**
     * @var string
     *
     * @ORM\Column(name="marca1_prod", type="string", length=100, nullable=false)
     */
    private $marca1Prod;

    /**
     * @var string
     *
     * @ORM\Column(name="marca2_prod", type="string", length=100, nullable=false)
     */
    private $marca2Prod;

    /**
     * @var string
     *
     * @ORM\Column(name="otro_nombre_prod", type="string", length=100, nullable=false)
     */
    private $otroNombreProd;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_prod", type="string", length=100, nullable=false)
     */
    private $estadoProd;

    /**
     * @var string
     *
     * @ORM\Column(name="presentacion_prod", type="string", length=100, nullable=false)
     */
    private $presentacionProd;

    /**
     * @var int
     *
     * @ORM\Column(name="prod_elaborado", type="integer", nullable=false)
     */
    private $prodElaborado;

    /**
     * @var string
     *
     * @ORM\Column(name="variedad_prod", type="string", length=100, nullable=false)
     */
    private $variedadProd;

    /**
     * @var string
     *
     * @ORM\Column(name="cultivo_prod", type="string", length=100, nullable=false)
     */
    private $cultivoProd;

    /**
     * @var string
     *
     * @ORM\Column(name="parte_prod", type="string", length=100, nullable=false)
     */
    private $parteProd;

    /**
     * @var string
     *
     * @ORM\Column(name="animal_prod", type="string", length=100, nullable=false)
     */
    private $animalProd;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_especie", type="string", length=100, nullable=false)
     */
    private $taxEspecie;

    /**
     * @var string
     *
     * @ORM\Column(name="maduracion_prod", type="string", length=100, nullable=false)
     */
    private $maduracionProd;

    /**
     * @var string
     *
     * @ORM\Column(name="do", type="string", length=100, nullable=false)
     */
    private $do;

    /**
     * @var string
     *
     * @ORM\Column(name="origen_prod", type="string", length=100, nullable=false)
     */
    private $origenProd;

    /**
     * @var int
     *
     * @ORM\Column(name="tratamiento_cocinero_prod", type="integer", nullable=false)
     */
    private $tratamientoCocineroProd;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_tratamiento", type="string", length=100, nullable=false)
     */
    private $tipoTratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_temporada", type="string", length=100, nullable=false)
     */
    private $inicioTemporada;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_temporada", type="string", length=100, nullable=false)
     */
    private $finTemporada;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_mejor_momento", type="string", length=100, nullable=false)
     */
    private $inicioMejorMomento;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_mejor_momento", type="string", length=100, nullable=false)
     */
    private $finMejorMomento;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_patata_nueva", type="string", length=100, nullable=false)
     */
    private $inicioPatataNueva;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_patata_nueva", type="string", length=100, nullable=false)
     */
    private $finPatataNueva;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_patata_semitardia", type="string", length=100, nullable=false)
     */
    private $inicioPatataSemitardia;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_patata_semitardia", type="string", length=100, nullable=false)
     */
    private $finPatataSemitardia;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_patata_tardia", type="string", length=100, nullable=false)
     */
    private $inicioPatataTardia;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_patata_tardia", type="string", length=100, nullable=false)
     */
    private $finPatataTardia;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_patata_vieja", type="string", length=100, nullable=false)
     */
    private $inicioPatataVieja;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_patata_vieja", type="string", length=100, nullable=false)
     */
    private $finPatataVieja;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_s_cultivo", type="string", length=100, nullable=false)
     */
    private $inicioSCultivo;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_s_cultivo", type="string", length=100, nullable=false)
     */
    private $finSCultivo;

    /**
     * @var string
     *
     * @ORM\Column(name="inicio_s_silvestre", type="string", length=100, nullable=false)
     */
    private $inicioSSilvestre;

    /**
     * @var string
     *
     * @ORM\Column(name="fin_s_silvestre", type="string", length=100, nullable=false)
     */
    private $finSSilvestre;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_prod", type="string", length=100, nullable=false)
     */
    private $proveedorProd;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_definicion1", type="string", length=100, nullable=false)
     */
    private $nombreDefinicion1;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_definicion2", type="string", length=100, nullable=false)
     */
    private $nombreDefinicion2;


}

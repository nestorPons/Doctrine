<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * IngredientesElaboracionesGastro
 *
 * @ORM\Table(name="ingredientes_elaboraciones_gastro", indexes={@ORM\Index(name="ingrediente_elaboracion", columns={"ingrediente_elaboracion", "ingredientes_elab_id_producto"})})
 * @ORM\Entity
 */
class IngredientesElaboracionesGastro
{
    /**
     * @var int
     *
     * @ORM\Column(name="ingredientes_elab_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ingredientesElabId;

    /**
     * @var int
     *
     * @ORM\Column(name="ingrediente_elaboracion", type="integer", nullable=false)
     */
    private $ingredienteElaboracion;

    /**
     * @var int
     *
     * @ORM\Column(name="apartado", type="integer", nullable=false)
     */
    private $apartado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_apartado", type="string", length=255, nullable=true)
     */
    private $nombreApartado;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredientes_elab_nombre", type="string", length=200, nullable=false)
     */
    private $ingredientesElabNombre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ingredientes_elab_id_producto", type="integer", nullable=true)
     */
    private $ingredientesElabIdProducto;


}

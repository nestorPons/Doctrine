<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PaisesGastro
 *
 * @ORM\Table(name="paises_gastro")
 * @ORM\Entity
 */
class PaisesGastro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPais;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_pais", type="string", length=50, nullable=false)
     */
    private $nombrePais;


}

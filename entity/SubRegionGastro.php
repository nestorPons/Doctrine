<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SubRegionGastro
 *
 * @ORM\Table(name="sub_region_gastro")
 * @ORM\Entity
 */
class SubRegionGastro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_subregion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSubregion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pais_subregion", type="integer", nullable=false)
     */
    private $idPaisSubregion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_region_subregion", type="integer", nullable=false)
     */
    private $idRegionSubregion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_subregion", type="string", length=200, nullable=false)
     */
    private $nombreSubregion;


}

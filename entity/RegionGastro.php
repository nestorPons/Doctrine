<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * RegionGastro
 *
 * @ORM\Table(name="region_gastro")
 * @ORM\Entity
 */
class RegionGastro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_region", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pais_region", type="integer", nullable=false)
     */
    private $idPaisRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_region", type="string", length=100, nullable=false)
     */
    private $nombreRegion;


}

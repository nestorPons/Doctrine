<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Fondos
 *
 * @ORM\Table(name="fondos")
 * @ORM\Entity
 */
class Fondos
{
    /**
     * @var int
     *
     * @ORM\Column(name="cod_fondo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codFondo;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_fondo", type="string", length=50, nullable=false)
     */
    private $descFondo;


}

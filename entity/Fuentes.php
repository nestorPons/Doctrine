<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Fuentes
 *
 * @ORM\Table(name="fuentes")
 * @ORM\Entity
 */
class Fuentes
{
    /**
     * @var int
     *
     * @ORM\Column(name="cod_fuente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codFuente;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_corta", type="string", length=50, nullable=false)
     */
    private $descCorta;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_larga", type="string", length=200, nullable=false)
     */
    private $descLarga;


}

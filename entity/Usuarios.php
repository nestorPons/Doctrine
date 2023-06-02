<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="usr_usuario", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usrUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="psw_usuario", type="string", length=200, nullable=false)
     */
    private $pswUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="tip_usuario", type="string", length=2, nullable=false, options={"default"="N"})
     */
    private $tipUsuario = 'N';

    /**
     * @var bool
     *
     * @ORM\Column(name="tip_sistema", type="boolean", nullable=false, options={"default"="1"})
     */
    private $tipSistema = true;


}

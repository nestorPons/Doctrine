<?php
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Dotenv\Dotenv;
use src\Entity\Presentacion;

// Cargar las variables de entorno desde el archivo .env en la raíz del proyecto
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Configuración de Doctrine
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . 'src/Entity/'], $isDevMode);

// Parámetros de conexión a la base de datos desde las variables de entorno
$conn = [
    'driver' => 'pdo_mysql',
    'host' => $_ENV['DB_HOST'],
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD']
];

// Obtener el EntityManager
$entityManager = EntityManager::create($conn, $config);

// Nombres de los estados
$nombres = [
    "Abadejo",
    "Anguila Delta del Ebro",
    "Arenque",
    "Atún rojo de almadraba",
    "Bacalao",
    "Bacalao negro",
    "Bacalao Skrei",
    "Balder",
    "Becada",
    "Besugo",
    "Búfala",
    "Bonito del Norte",
    "Boquerón",
    "Cabra",
    "Cabrito",
    "Cabracho",
    "Calamar",
    "Carpa",
    "Cerdo blanco",
    "Cerdo Chato murciano",
    "Cerdo Ibérico",
    "Cerdo Ibérico 100%",
    "Cherna",
    "Ciervo",
    "Conejo de granja",
    "Conejo de monte",
    "Corvina",
    "Corzo",
    "Dorada salvaje del mediterráneo",
    "Erla",
    "Estornino",
    "Gallina",
    "Gallina enana",
    "Gallineta rosada",
    "Jabalí",
    "Jurel",
    "Lenguado",
    "Liebre",
    "Lubina",
    "Maruca",
    "Merluza de Bermeo",
    "Mero",
    "Mugle",
    "Mújol dorado",
    "Oca",
    "Oveja",
    "Palometa negra",
    "Paloma torcaz",
    "Pargo",
    "Pargo rojo",
    "Pato azulón",
    "Pato Mulard",
    "Pechuga de pavo",
    "Pechuga de pollo",
    "Pechuga de pollo campero",
    "Pechuga de pollo de caserío",
    "Pechuga de pollo de corral",
    "Pechuga de pollo de granja",
    "Pechuga de pollo ecológico",
    "Pechuga de pollo trufado",
    "Perca",
    "Perdiz roja",
    "Pez de San Pedro",
    "Pez Gallo",
    "Pichón de granja",
    "Pichón salvaje",
    "Platija",
    "Pollo de caserío",
    "Pato Mulard",
    "Trucha asalmonada",
    "Trucha del Fiordo",
    "Urta",
    "Vaca",
    "Virrey"
];

// Insertar registros en la entidad "Estados"
foreach ($nombres as $nombre) {
    $entityManager->persist(new Presentacion($nombre));
}

$entityManager->flush();

echo "Se han insertado los registros correctamente." . PHP_EOL;

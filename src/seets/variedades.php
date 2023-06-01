<?php
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Dotenv\Dotenv;
use src\Entity\Variedad;

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
    "Albariño", "Alfafarenca", "Arbequina", "Arbosana", "Cabernet Sauvignon", "Chardonnay", "Cornicabra", 
    "Coupage", "Criollo", "Cuquillo", "Empeltre", "Farga", "Filtrada", "Forastero", "Frantoio", "Gewurztraminer", 
    "Hojiblanca", "Manzanilla cacereña", "Marfil", "Morruda", "Moscatel dulce", "Moscatel seco", "No filtrada", 
    "Ocal", "Pasificada (Variedad blanca)", "Picual", "Picudo", "Royal", "Sevillenca", "Trinitario", "Variedad blanca", 
    "Variedad tinta"
];

// Insertar registros en la entidad "Estados"
foreach ($nombres as $nombre) {
    $entityManager->persist(new Variedad($nombre));
}

$entityManager->flush();

echo "Se han insertado los registros correctamente." . PHP_EOL;

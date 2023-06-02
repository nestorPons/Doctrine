<?php
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Dotenv\Dotenv;
use src\Entity\Estado;

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
$estadosNombres = [
    "Ahumado", "Aliñada", "Chacina cocida", "Conserva", "Deshidratado", "Desalado", "Encurtido", "Fermentado",
    "Fresco", "Granulado", "Hervido", "Integral", "Liofilizado", "Marinado", "Microfiltrado", "No fermentado",
    "Nixtamalizado", "Pasteurizado", "Polvo", "Pasta", "Pulpa", "Refinado", "Salazón", "Salazón y curado",
    "Sal marina", "Sal mineral", "Seco", "Semicurado a curado", "Semicurado a viejo", "Sucedáneo", "Tierno",
    "Tierno a curado", "Vino seco", "Vino espumoso", "Vino dulce", "Vino fortificado", "Vino de hielo", "Tostado"
];

// Insertar registros en la entidad "Estados"
foreach ($estadosNombres as $nombre) {
    $estado = new Estado($nombre);
    $entityManager->persist($estado);
}

$entityManager->flush();

echo "Se han insertado los registros correctamente." . PHP_EOL;

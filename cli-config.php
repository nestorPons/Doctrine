<?php
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Configuración de Doctrine
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

// Configuración de la conexión a la base de datos
$dbParams = [
    'driver'   => $_ENV['DB_DRIVER'],
    'host'     => $_ENV['DB_HOST'],
    'port'     => $_ENV['DB_PORT'],
    'dbname'   => $_ENV['DB_NAME'],
    'user'     => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
];

$config = Setup::createAnnotationMetadataConfiguration(
    array($_ENV['DOCTRINE_ENTITY_PATHS']),
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader
);

$entityManager = EntityManager::create($dbParams, $config);

return ConsoleRunner::createHelperSet($entityManager);

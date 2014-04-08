<?php

require_once "vendor/autoload.php";

set_include_path(__DIR__ ."/entity-files" . PATH_SEPARATOR . get_include_path());

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/entity-files");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'teste',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

$driverImpl = $config->newDefaultAnnotationDriver(__DIR__ ."/entity-files");
$config->setMetadataDriverImpl($driverImpl);
$config->setProxyDir(__DIR__ .'/entity-files/proxies');
$config->setProxyNamespace('Proxies');
$config->setAutoGenerateProxyClasses(true);

\Doctrine\DBAL\Types\Type::addType('datemesref', '\Types\DateMesRef');

$entityManager = EntityManager::create($dbParams, $config);
EM::$instance = $entityManager;
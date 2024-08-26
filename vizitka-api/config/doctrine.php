<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require "../vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration([__DIR__."/../src/v2/Entities"], $isDevMode);

$conn = [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'test-stend',
    'user' => 'root',
    'password' => '',
];

return EntityManager::create($conn, $config);
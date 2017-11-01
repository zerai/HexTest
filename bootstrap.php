<?php
//// bootstrap.php
//require_once "vendor/autoload.php";
//
//use Doctrine\ORM\Tools\Setup;
//use Doctrine\ORM\EntityManager;
//
//
////$paths = array("/path/to/entity-files");
//$paths = array(
//    __DIR__."/HexTest/Infrastructure/Persistance/Doctrine/Mapping"
//);
//$isDevMode = false;
//
//
//$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
//
//
//// the connection configuration
//$dbParams = array(
//    'driver'   => 'pdo_mysql',
//    'user'     => 'app_user',
//    'password' => 'app_password',
//    'host' => 'db',
//    'dbname'   => 'app',
//);
//
//
//
//$conn = array(
//    'driver'   => 'pdo_mysql',
//    'user'     => 'app_user',
//    'password' => 'app_password',
//    'host' => 'db',
//    'dbname'   => 'app',
//);
//
//// obtaining the entity manager
//$entityManager = EntityManager::create($conn, $config);
//
//
//
//
//
//
//
//
//
//
//
////$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
////$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
////$entityManager = EntityManager::create($dbParams, $config);


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Types\Type;
require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;


$paths = array(
    __DIR__."/HexTest/Infrastructure/Persistance/Doctrine/Mapping"
);
$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode
//
//);

// database configuration parameters
//$conn = array(
//    'driver' => 'pdo_sqlite',
//    'path' => __DIR__ . '/db.sqlite',
//);


$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'app_user',
    'password' => 'app_password',
    'host' => 'db',
    'dbname'   => 'app',
);



// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);


Type::addType('UserId', 'HexTest\Infrastructure\Domain\Model\User\DoctrineUserId');
Type::addType('TaskId', 'HexTest\Infrastructure\Domain\Model\Task\DoctrineTaskId');
//Type::addType('point', 'HexTest\Infrastructure\Domain\Model\PointType');
//$entityManager->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('point', 'point');
$entityManager->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('UserId', 'UserId');
$entityManager->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('TaskId', 'TaskId');
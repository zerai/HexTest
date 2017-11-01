<?php
//// bootstrap.php
//require_once "vendor/autoload.php";
//
//use Doctrine\ORM\Tools\Setup;
//use Doctrine\ORM\EntityManager;
//
////$paths = array("/path/to/entity-files");
//$paths = array("Mapping");
//$isDevMode = false;
//
//// the connection configuration
//$dbParams = array(
//    'driver'   => 'pdo_mysql',
//    'user'     => 'root',
//    'password' => '123456',
//    'dbname'   => 'app',
//    'host'      => 'db'
//);



// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

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

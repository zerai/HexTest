<?php

namespace HexTest\Infrastructure\Persistance\Doctrine;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

use Doctrine\DBAL\Types\Type;

class EntityManagerFactory
{
    /**
     * @return EntityManager
     */
    public function build($conn)
    {
        //Type::addType('TaskId', 'HexTest\Infrastructure\Domain\Model\Task\DoctrineTaskId');
//
//        \Doctrine\DBAL\Types\Type::addType('UserId', 'HexTest\Infrastructure\Domain\Model\User\DoctrineUserId');
//        \Doctrine\DBAL\Types\Type::addType('TaskId', 'HexTest\Infrastructure\Domain\Model\Task\DoctrineTaskId');
//
//        //\Doctrine\DBAL\Types\Type::addType('UserId', 'Lw\Infrastructure\Domain\Model\User\DoctrineUserId');
//        //\Doctrine\DBAL\Types\Type::addType('WishId', 'Lw\Infrastructure\Domain\Model\Wish\DoctrineWishId');
//        //\Doctrine\DBAL\Types\Type::addType('JobpostingId', 'Lw\Infrastructure\Domain\Model\Jobposting\DoctrineJobpostingId');
//
//        return EntityManager::create(
//            $conn,
//            Setup::createYAMLMetadataConfiguration([__DIR__ . '/Mapping'], true)
//        );
//



        Type::addType('UserId', 'HexTest\Infrastructure\Domain\Model\User\DoctrineUserId');
        Type::addType('TaskId', 'HexTest\Infrastructure\Domain\Model\Task\DoctrineTaskId');
//        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('point', 'point');
//        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('UserId', 'UserId');

        $em =  EntityManager::create(
            $conn,
            Setup::createYAMLMetadataConfiguration([__DIR__ . '/Mapping'], true)
        );
//        Type::addType('TaskId', 'HexTest\Infrastructure\Domain\Model\User\DoctrineUserId');
//        Type::addType('point', 'HexTest\Infrastructure\Domain\Model\PointType');
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('TaskId', 'TaskId');
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('UserId', 'UserId');

        return $em;

    }
}

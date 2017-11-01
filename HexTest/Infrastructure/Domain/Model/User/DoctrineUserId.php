<?php

namespace HexTest\Infrastructure\Domain\Model\User;

use HexTest\Infrastructure\Domain\Model\DoctrineEntityId;

class DoctrineUserId extends DoctrineEntityId
{
    public function getName()
    {
        return 'UserId';
    }

    protected function getNamespace()
    {
        return 'HexTest\Domain\Model\User';
    }
}

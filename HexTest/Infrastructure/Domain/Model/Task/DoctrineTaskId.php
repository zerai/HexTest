<?php
namespace HexTest\Infrastructure\Domain\Model\Task;

use HexTest\Infrastructure\Domain\Model\DoctrineEntityId;

class DoctrineTaskId extends DoctrineEntityId
{
    const MYTYPE = 'taskId';

    public function getName()
    {
        return 'TaskId';
    }

    protected function getNamespace()
    {
        return 'HexTest\Domain\Model\Task';
    }
}

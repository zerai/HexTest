<?php

namespace HexTest\Infrastructure\Domain\Model\Task;

use Doctrine\ORM\EntityRepository;
use HexTest\Domain\Model\Task\Task;
use HexTest\Domain\Model\Task\TaskId;
use HexTest\Domain\Model\Task\TaskRepository;

class DoctrineTaskRepository extends EntityRepository implements TaskRepository
{
    /**
     * @param TaskId $taskId
     *
     * @return Task
     */
    public function ofId(TaskId $taskId) //UserId
    {
        return $this->find($taskId);
    }

//    /**
//     * @param string $email
//     *
//     * @return JobPosting
//     */
//    public function ofEmail($email)
//    {
//        return $this->findOneBy(['email' => $email]);
//    }

    /**
     * @param Task $task
     */
    public function add(Task $task)
    {
        $this->getEntityManager()->persist($task);
        $this->getEntityManager()->flush();
    }

    /**
     * @return TaskId
     */
    public function nextIdentity()
    {
        return new TaskId();
    }
}

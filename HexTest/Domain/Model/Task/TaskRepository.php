<?php

namespace HexTest\Domain\Model\Task;

/**
 * Interface TaskRepository.
 */
interface TaskRepository
{
    /**
     * @param TaskId $taskId
     *
     * @return Task
     */
    public function ofId( TaskId $taskId);

//    /**
//     * @param string $email
//     *
//     * @return User
//     */
//    public function ofEmail($email);

    /**
     * @param Task $task
     */
    public function add(Task $task);

    /**
     * @return TaskId
     */
    public function nextIdentity();
}
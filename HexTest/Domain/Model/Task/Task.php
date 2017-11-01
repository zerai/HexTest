<?php

namespace HexTest\Domain\Model\Task;


class Task
{
    const MAX_LENGTH_NAME = 255;
    const MIN_LENGTH_NAME = 5;
//    const MAX_LENGTH_PASSWORD = 255;
//    const MAX_WISHES = 3;


    /**
     * @var TaskId $taskId
     */
    protected $taskId;


    /**
     * @var string $name
     */
    protected $name;



    /**
     * @param TaskId $taskId
     *
     * @param String $name
     */
    public function __construct(TaskId $taskId, $name)
    {
        $this->taskId = $taskId;
        $this->name = $name;
    }


    /**
     * @return TaskId
     */
    public function Id()
    {
        return $this->taskId();
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

}
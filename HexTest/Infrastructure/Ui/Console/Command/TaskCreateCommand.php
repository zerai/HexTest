<?php

namespace HexTest\Infrastructure\Ui\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use HexTest\Domain\Model\Task\Task;
use HexTest\Domain\Model\Task\TaskId;

class TaskCreateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('domain:task:create')
            ->setDescription('Create new task')
            //->addArgument('exchange-name', InputArgument::OPTIONAL, 'Exchange name to publish events to', 'last-will')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $app = $this->getApplication()->getContainer();


        $repo = $app['task_repository'];
        //var_dump($repo);

        $taskId = new TaskId();

        //var_dump($taskId);


        $task = new Task($taskId, 'Inviare report al capo!!');

        $repo->add($task);

        $output->writeln(sprintf(' <info>Task created with name: </info><comment>%s</comment>', $task->name()));
    }
}

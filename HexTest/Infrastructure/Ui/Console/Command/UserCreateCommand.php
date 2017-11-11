<?php

namespace HexTest\Infrastructure\Ui\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


use HexTest\Domain\Model\User\JobPosting;
use HexTest\Domain\Model\User\UserId;

class UserCreateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('domain:user:create')
            ->setDescription('Create new user')
            //->addArgument('exchange-name', InputArgument::OPTIONAL, 'Exchange name to publish events to', 'last-will')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $app = $this->getApplication()->getContainer();

        $repo = $app['user_repository']; //var_dump($repo);

        $userId = new UserId();

        $user = new JobPosting($userId, '1_example@example.com', 'pippo'); //echo $user->email();

        $repo->add($user);
        //$repo->flush();

        $output->writeln(sprintf(' <info>JobPosting created with id = </info> - <comment>%s</comment>', $user->email()));
    }
}

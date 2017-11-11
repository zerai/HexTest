<?php

namespace HexTest\Infrastructure\Ui\Console\Command;

use HexTest\Application\Service\User\ViewUserRequest;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


use HexTest\Domain\Model\User\JobPosting;
use HexTest\Domain\Model\User\UserId;

class UserViewCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('domain:user:view')
            ->setDescription('View user')
            //->addArgument('exchange-name', InputArgument::OPTIONAL, 'Exchange name to publish events to', 'last-will')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $app = $this->getApplication()->getContainer();

        $user = $app['view_user_application_service']->execute(
            new ViewUserRequest('070207aa-7697-443c-8f02-6aa4a9eccf26')
        );


        $output->writeln(
            [
                'JobPosting Info',
                '========',
                sprintf(' <info>JobPosting email = </info> - <comment>%s</comment>', $user->email()),
                sprintf(' <info>JobPosting Id = </info> - <comment>%s</comment>', $user->id())
            ]
        );
    }
}

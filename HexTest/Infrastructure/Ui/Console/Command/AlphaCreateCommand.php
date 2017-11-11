<?php

namespace HexTest\Infrastructure\Ui\Console\Command;

//use Ddd\Application\Notification\NotificationService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use HexTest\Domain\Model\User\JobPosting;

class AlphaCreateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('domain:alpha:create')
            ->setDescription('Notify all domain events via messaging')
            //->addArgument('exchange-name', InputArgument::OPTIONAL, 'Exchange name to publish events to', 'last-will')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $app = $this->getApplication()->getContainer();


        $repo = $app['user_repository'];
        var_dump($repo);

        $user = new JobPosting('223', 'example@example.com', 'pippo');

        $repo->add($user);
        //$repo->flush();



//        $notificationService = new NotificationService(
//            $app['event_store'],
//            $app['message_tracker'],
//            $app['message_producer']
//        );
//
//        $numberOfNotifications = $notificationService->publishNotifications($input->getArgument('exchange-name'));
//        $output->writeln(sprintf('<comment>%d</comment> <info>notification(s) sent!</info>', $numberOfNotifications));


        $output->writeln(sprintf('<comment>%d</comment> <info>notification(s) sent!</info>', 15));
    }
}

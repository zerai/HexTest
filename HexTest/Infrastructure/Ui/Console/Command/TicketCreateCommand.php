<?php

namespace HexTest\Infrastructure\Ui\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use HexTest\Domain\Ticket\Ticket;

class TicketCreateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('domain:ticket:create')
            ->setDescription('Create new ticket')
            //->addArgument('exchange-name', InputArgument::OPTIONAL, 'Exchange name to publish events to', 'last-will')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $app = $this->getApplication()->getContainer(); //var_dump($app);


        $repo = $app['ticket_repository']; //var_dump($repo);

        $ticket = new Ticket('2222343357722122', '22', '33', new \DateTime('now'), '55', '66'); //echo $user->email();

        $repo->add($ticket);

        //$repo->add($ticket);//    save($ticket);
        //$repo->flush();


        $output->writeln(sprintf(' <info>Ticket created!</info> - <comment>%d</comment>', $ticket->getPNR()));
    }
}

<?php

namespace HexTest\Domain\Ticket;

interface TicketRepository
{
    /**
     * @param Ticket $ticket
     *
     */
    public function save(Ticket $ticket);

    /**
     * @param $id
     * @return Ticket
     */
    public function findById($id);


    /**
     * @param Ticket $ticket
     */
    public function add(Ticket $ticket);
}

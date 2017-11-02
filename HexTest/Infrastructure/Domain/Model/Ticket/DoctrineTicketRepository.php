<?php

namespace HexTest\Infrastructure\Domain\Model\Ticket;

use Doctrine\ORM\EntityRepository;
use HexTest\Domain\Ticket\Ticket;

use HexTest\Domain\Ticket\TicketRepository;

class DoctrineTicketRepository extends EntityRepository implements TicketRepository
{
//    /**
//     * @param UserId $userId
//     *
//     * @return User
//     */
//    public function ofId( $userId) //UserId
//    {
//        return $this->find($userId);
//    }
//
//    /**
//     * @param string $email
//     *
//     * @return User
//     */
//    public function ofEmail($email)
//    {
//        return $this->findOneBy(['email' => $email]);
//    }
//
//    /**
//     * @param User $user
//     */
//    public function add(User $user)
//    {
//        $this->getEntityManager()->persist($user);
//        $this->getEntityManager()->flush();
//
//
//    }
//
//    /**
//     * @return UserId
//     */
//    public function nextIdentity()
//    {
//        return new UserId();
//    }

    /**
     * @param Ticket $ticket
     */
    public function save(Ticket $ticket)
    {
        $this->getEntityManager()->persist($ticket);
        $this->getEntityManager()->flush();
    }

    /**
     * @param $id
     * @return Ticket
     */
    public function findById($id)
    {
    }

    /**
     * @param Ticket $ticket
     */
    public function add(Ticket $ticket)
    {
        $this->getEntityManager()->persist($ticket);
        $this->getEntityManager()->flush();
    }
}

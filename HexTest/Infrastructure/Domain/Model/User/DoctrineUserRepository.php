<?php

namespace HexTest\Infrastructure\Domain\Model\User;

use Doctrine\ORM\EntityRepository;
use HexTest\Domain\Model\User\JobPosting;
use HexTest\Domain\Model\User\UserId;
use HexTest\Domain\Model\User\UserRepository;

class DoctrineUserRepository extends EntityRepository implements UserRepository
{
    /**
     * @param UserId $userId
     *
     * @return JobPosting
     */
    public function ofId(UserId $userId) //UserId
    {
        return $this->find($userId);
    }

    /**
     * @param string $email
     *
     * @return JobPosting
     */
    public function ofEmail($email)
    {
        return $this->findOneBy(['email' => $email]);
    }

    /**
     * @param JobPosting $user
     */
    public function add(JobPosting $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    /**
     * @return UserId
     */
    public function nextIdentity()
    {
        return new UserId();
    }
}

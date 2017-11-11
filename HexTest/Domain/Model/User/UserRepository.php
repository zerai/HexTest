<?php

namespace HexTest\Domain\Model\User;

/**
 * Interface UserRepository.
 */
interface UserRepository
{
    /**
     * @param UserId $userId
     *
     * @return JobPosting
     */
    public function ofId(UserId $userId); //UserId

    /**
     * @param string $email
     *
     * @return JobPosting
     */
    public function ofEmail($email);

    /**
     * @param JobPosting $user
     */
    public function add(JobPosting $user);

    /**
     * @return UserId
     */
    public function nextIdentity();
}

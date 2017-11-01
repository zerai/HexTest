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
     * @return User
     */
    public function ofId(UserId $userId); //UserId

    /**
     * @param string $email
     *
     * @return User
     */
    public function ofEmail($email);

    /**
     * @param User $user
     */
    public function add(User $user);

    /**
     * @return UserId
     */
    public function nextIdentity();
}

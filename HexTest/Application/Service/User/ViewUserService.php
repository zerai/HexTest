<?php

namespace HexTest\Application\Service\User;

use HexTest\Domain\Model\User\UserId;
use HexTest\Domain\Model\User\UserRepository;

class ViewUserService
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param ViewUserRequest $request
     *
     * @return User[]
     */
    public function execute($request = null)
    {
        //return $this->wishRepository->ofUserId(new UserId($request->userId()));

        return $this->userRepository->ofId(new UserId($request->userId()));
    }
}

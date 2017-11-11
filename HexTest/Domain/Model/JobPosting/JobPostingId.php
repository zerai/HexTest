<?php

namespace HexTest\Domain\Model\JobPosting;

use Assert\Assertion;
use Ramsey\Uuid\Uuid;

class JobPostingId
{
    /**
     * @var string
     */
    private $id;

    /**
     * @param string $id
     */
    public function __construct($id = null)
    {
        Assertion::uuid($id, "Jobposting uuid string is not valid UUID.");
        $this->id = null === $id ? Uuid::uuid4()->toString() : $id;
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @param JobPostingId $jobpostingId
     *
     * @return bool
     */
    public function equals(JobPostingId $jobpostingId)
    {
        return $this->id() === $jobpostingId->id();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id();
    }
}

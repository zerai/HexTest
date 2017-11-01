<?php
namespace HexTest\Domain\Model\Task;

use Ramsey\Uuid\Uuid;
use Assert\Assertion;
use Assert\AssertionFailedException;


Class TaskId {

    /**
     * @var string
     */
    private $id;

    /**
     * @param string $id
     */
    public function __construct( $id = null )
    {
        try {
            Assertion::uuid($id, "Not valid UUID.");
        } catch(AssertionFailedException $e) {
            $e->getValue(); // the value that caused the failure
            $e->getConstraints(); // the additional constraints of the assertion.
        }
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
     * @param TaskId $userId
     *
     * @return bool
     */
    public function equals(TaskId $userId)
    {
        return $this->id() === $userId->id();
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id();
    }


}
<?php


namespace HexTest\Domain\Model\Task;

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    /**
     * @test
     * @expectedException \Assert\AssertionFailedException
     */
    public function invalid_Uuid_Should_Throw_Exception()
    {


        //new Self_('valid@email.com');

        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );

        $this->createTaskIdWithFakeUuid('3625147');


        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );





    }

    /**
     * @test
     */
    public function itShouldPublishUserRegisteredEvent()
    {
        //$id = DomainEventPublisher::instance()->subscribe($subscriber = new SpySubscriber());
        $task = new Task($taskId = new TaskId(), 'my name');
        //DomainEventPublisher::instance()->unsubscribe($id);


        $this->assertEquals('my name', $task->name());

        //$this->assertUserRegisteredEventPublished($subscriber, $userId);
    }




}
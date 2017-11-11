<?php

namespace spec\HexTest\Domain\Model\JobPosting;

use Assert\InvalidArgumentException;
use HexTest\Domain\Model\JobPosting\JobPostingId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use spec\JobPostingTestValues;

class JobPostingIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(JobPostingTestValues::JOBPOSTING_UUID);
    }

    function it_has_JobPostingId_type()
    {
        $this->shouldHaveType(JobPostingId::class);
    }


    function it_return_its_value_as_a_string()
    {
        $this->id()->shouldBeString();
        $this->id()->shouldBeEqualTo(JobPostingTestValues::JOBPOSTING_UUID);
    }

    function it_return_true_if_UserId_Object_its_the_same()
    {
        $this->equals($this)->shouldReturn(true);
    }

    function it_return_false_if_JobPostingId_Object_its_different()
    {
        $this->equals(new JobPostingId(JobPostingTestValues::JOBPOSTING_UUID_SECONDARY))->shouldReturn(false);
    }


    function it_should_throw_an_exception_if_uuid_string_is_wrong()
    {
    // TODO QUANDO LA STRINGA uuid viene passata nel costruttore
    // valutare che sia una stringa convertibile in uuid
    // in caso sollevare eccezione di tipo invalid argument
    // o custom exception invalid UserUuidType
    // attualmente come in questo test se la stringa non è valida
    // il sistema ne genera una nuova, ma meglio avere eccezione
    // con un dataTransformer questo comportamento potrebbe generare errori

        $this->beConstructedWith(JobPostingTestValues::JOBPOSTING_UUID_INVALID);

        $this->shouldBeAnInstanceOf(JobPostingId::class);
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();

        //$this->id()->shouldBeEqualTo(JobPostingTestValues::JOBPOSTING_UUID);
    }

}

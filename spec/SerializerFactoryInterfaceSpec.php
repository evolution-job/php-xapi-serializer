<?php

namespace spec\Xabbuh\XApi\Serializer;

use PhpSpec\ObjectBehavior;
use Xabbuh\XApi\Serializer\ActivitySerializerInterface;
use Xabbuh\XApi\Serializer\ActorSerializerInterface;
use Xabbuh\XApi\Serializer\DocumentDataSerializerInterface;
use Xabbuh\XApi\Serializer\PersonSerializerInterface;
use Xabbuh\XApi\Serializer\StateDocumentSerializerInterface;
use Xabbuh\XApi\Serializer\StatementResultSerializerInterface;
use Xabbuh\XApi\Serializer\StatementSerializerInterface;

abstract class SerializerFactoryInterfaceSpec extends ObjectBehavior
{
    public function it_creates_a_statement_serializer(): void
    {
        $this->createStatementSerializer()->shouldHaveType(StatementSerializerInterface::class);
    }

    public function it_creates_a_statement_result_serializer(): void
    {
        $this->createStatementResultSerializer()->shouldHaveType(StatementResultSerializerInterface::class);
    }

    public function it_creates_an_actor_serializer(): void
    {
        $this->createActorSerializer()->shouldHaveType(ActorSerializerInterface::class);
    }

    public function it_creates_a_document_data_serializer(): void
    {
        $this->createDocumentDataSerializer()->shouldHaveType(DocumentDataSerializerInterface::class);
    }

    public function it_creates_an_activity_serializer(): void
    {
        $this->createActivitySerializer()->shouldHaveType(ActivitySerializerInterface::class);
    }

    public function it_creates_a_person_serializer(): void
    {
        $this->createPersonSerializer()->shouldHaveType(PersonSerializerInterface::class);
    }

    public function it_creates_a_state_document_serializer(): void
    {
        $this->createStateDocumentSerializer()->shouldHaveType(StateDocumentSerializerInterface::class);
    }
}

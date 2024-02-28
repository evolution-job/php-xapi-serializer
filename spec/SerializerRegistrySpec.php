<?php

namespace spec\Xabbuh\XApi\Serializer;

use PhpSpec\ObjectBehavior;
use Xabbuh\XApi\Serializer\ActivitySerializerInterface;
use Xabbuh\XApi\Serializer\ActorSerializerInterface;
use Xabbuh\XApi\Serializer\DocumentDataSerializerInterface;
use Xabbuh\XApi\Serializer\PersonSerializerInterface;
use Xabbuh\XApi\Serializer\SerializerRegistryInterface;
use Xabbuh\XApi\Serializer\StateDocumentSerializerInterface;
use Xabbuh\XApi\Serializer\StatementResultSerializerInterface;
use Xabbuh\XApi\Serializer\StatementSerializerInterface;

class SerializerRegistrySpec extends ObjectBehavior
{
    public function it_is_a_serializer_registry(): void
    {
        $this->shouldHaveType(SerializerRegistryInterface::class);
    }

    public function it_stores_a_statement_serializer_for_later_retrieval(StatementSerializerInterface $statementSerializer): void
    {
        $this->setStatementSerializer($statementSerializer);
        $this->getStatementSerializer()->shouldReturn($statementSerializer);
    }

    public function it_stores_a_statement_result_serializer_for_later_retrieval(StatementResultSerializerInterface $statementResultSerializer): void
    {
        $this->setStatementResultSerializer($statementResultSerializer);
        $this->getStatementResultSerializer()->shouldReturn($statementResultSerializer);
    }

    public function it_stores_an_actor_serializer_for_later_retrieval(ActorSerializerInterface $actorSerializer): void
    {
        $this->setActorSerializer($actorSerializer);
        $this->getActorSerializer()->shouldReturn($actorSerializer);
    }

    public function it_stores_a_document_data_serializer_for_later_retrieval(DocumentDataSerializerInterface $documentDataSerializer): void
    {
        $this->setDocumentDataSerializer($documentDataSerializer);
        $this->getDocumentDataSerializer()->shouldReturn($documentDataSerializer);
    }

    public function it_stores_an_activity_serializer_for_later_retrieval(ActivitySerializerInterface $activitySerializer): void
    {
        $this->setActivitySerializer($activitySerializer);
        $this->getActivitySerializer()->shouldReturn($activitySerializer);
    }

    public function it_stores_a_person_serializer_for_later_retrieval(PersonSerializerInterface $personSerializer): void
    {
        $this->setPersonSerializer($personSerializer);
        $this->getPersonSerializer()->shouldReturn($personSerializer);
    }

    public function it_stores_a_state_document_serializer_for_later_retrieval(StateDocumentSerializerInterface $stateDocumentSerializer): void
    {
        $this->setStateDocumentSerializer($stateDocumentSerializer);
        $this->getStateDocumentSerializer()->shouldReturn($stateDocumentSerializer);
    }
}

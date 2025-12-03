<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApi\Serializer;

/**
 * Registry containing all the serializers.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
final class SerializerRegistry implements SerializerRegistryInterface
{
    // The activity serializer
    private ?ActivitySerializerInterface $activitySerializer = null;

    // The actor serializer
    private ?ActorSerializerInterface $actorSerializer = null;

    // The document data serializer
    private ?DocumentDataSerializerInterface $documentDataSerializer = null;

    // The person serializer
    private ?PersonSerializerInterface $personSerializer = null;

    // The state document serializer
    private ?StateDocumentSerializerInterface $stateDocumentSerializer = null;

    // The statement result serializer
    private ?StatementResultSerializerInterface $statementResultSerializer = null;

    // The statement serializer
    private ?StatementSerializerInterface $statementSerializer = null;

    // The state serializer
    private ?StateSerializerInterface $stateSerializer = null;

    /**
     * {@inheritdoc}
     */
    public function getActivitySerializer(): ?ActivitySerializerInterface
    {
        return $this->activitySerializer;
    }

    /**
     * {@inheritdoc}
     */
    public function setActivitySerializer(ActivitySerializerInterface $activitySerializer): void
    {
        $this->activitySerializer = $activitySerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getActorSerializer(): ?ActorSerializerInterface
    {
        return $this->actorSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function setActorSerializer(ActorSerializerInterface $actorSerializer): void
    {
        $this->actorSerializer = $actorSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getDocumentDataSerializer(): ?DocumentDataSerializerInterface
    {
        return $this->documentDataSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function setDocumentDataSerializer(DocumentDataSerializerInterface $documentDataSerializer): void
    {
        $this->documentDataSerializer = $documentDataSerializer;
    }

    /**
     * {@inheritdoc}
     */
    public function getPersonSerializer(): ?PersonSerializerInterface
    {
        return $this->personSerializer;
    }

    /**
     * {@inheritdoc}
     */
    public function setPersonSerializer(PersonSerializerInterface $personSerializer): void
    {
        $this->personSerializer = $personSerializer;
    }

    /**
     * {@inheritdoc}
     */
    public function getStateDocumentSerializer(): ?StateDocumentSerializerInterface
    {
        return $this->stateDocumentSerializer;
    }

    /**
     * {@inheritdoc}
     */
    public function setStateDocumentSerializer(StateDocumentSerializerInterface $stateDocumentSerializer): void
    {
        $this->stateDocumentSerializer = $stateDocumentSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatementResultSerializer(): ?StatementResultSerializerInterface
    {
        return $this->statementResultSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function setStatementResultSerializer(StatementResultSerializerInterface $statementResultSerializer): void
    {
        $this->statementResultSerializer = $statementResultSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatementSerializer(): ?StatementSerializerInterface
    {
        return $this->statementSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function setStatementSerializer(StatementSerializerInterface $statementSerializer): void
    {
        $this->statementSerializer = $statementSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getStateSerializer(): ?StateSerializerInterface
    {
        return $this->stateSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function setStateSerializer(StateSerializerInterface $stateSerializer): void
    {
        $this->stateSerializer = $stateSerializer;
    }
}

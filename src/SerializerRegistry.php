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
    // The statement serializer
    private ?StatementSerializerInterface $statementSerializer = null;

    // The statement result serializer
    private ?StatementResultSerializerInterface $statementResultSerializer = null;

    // The actor serializer
    private ?ActorSerializerInterface $actorSerializer = null;

    // The document data serializer
    private ?DocumentDataSerializerInterface $documentDataSerializer = null;

    // The activity serializer
    private ?ActivitySerializerInterface $activitySerializer = null;

    // The state document serializer
    private ?StateDocumentSerializerInterface $stateDocumentSerializer = null;

    // The person serializer
    private ?PersonSerializerInterface $personSerializer = null;

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
    public function getStatementSerializer(): ?StatementSerializerInterface
    {
        return $this->statementSerializer;
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
    public function getStatementResultSerializer(): ?StatementResultSerializerInterface
    {
        return $this->statementResultSerializer;
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
    public function getActorSerializer(): ?ActorSerializerInterface
    {
        return $this->actorSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function setDocumentDataSerializer(DocumentDataSerializerInterface $documentDataSerializer): void
    {
        $this->documentDataSerializer = $documentDataSerializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getDocumentDataSerializer(): ?DocumentDataSerializerInterface
    {
        return $this->documentDataSerializer;
    }

    /**
     * {@inheritdoc}
     */
    public function setActivitySerializer(ActivitySerializerInterface $activitySerializer): void
    {
        $this->activitySerializer = $activitySerializer;
    }

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
    public function setPersonSerializer(PersonSerializerInterface $personSerializer): void
    {
        $this->personSerializer = $personSerializer;
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
    public function setStateDocumentSerializer(StateDocumentSerializerInterface $stateDocumentSerializer): void
    {
        $this->stateDocumentSerializer = $stateDocumentSerializer;
    }

    /**
     * {@inheritdoc}
     */
    public function getStateDocumentSerializer(): ?StateDocumentSerializerInterface
    {
        return $this->stateDocumentSerializer;
    }
}

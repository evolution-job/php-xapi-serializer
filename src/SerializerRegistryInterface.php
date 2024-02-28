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
interface SerializerRegistryInterface
{
    /**
     * Sets the {@link StatementSerializerInterface statement serializer}.
     *
     * @param StatementSerializerInterface $statementSerializer The serializer
     */
    public function setStatementSerializer(StatementSerializerInterface $statementSerializer);

    /**
     * Returns the {@link StatementSerializerInterface statement serializer}.
     *
     * @return StatementSerializerInterface|null The serializer
     */
    public function getStatementSerializer(): ?StatementSerializerInterface;

    /**
     * Sets the {@link StatementResultSerializerInterface statement result serializer}.
     *
     * @param StatementResultSerializerInterface $statementResultSerializer The serializer
     */
    public function setStatementResultSerializer(StatementResultSerializerInterface $statementResultSerializer);

    /**
     * Returns the {@link StatementResultSerializerInterface statement result serializer}.
     *
     * @return StatementResultSerializerInterface|null The serializer
     */
    public function getStatementResultSerializer(): ?StatementResultSerializerInterface;

    /**
     * Sets the {@link ActorSerializerInterface actor serializer}.
     *
     * @param ActorSerializerInterface $actorSerializer The serializer
     */
    public function setActorSerializer(ActorSerializerInterface $actorSerializer);

    /**
     * Returns the {@link ActorSerializerInterface actor serializer}.
     *
     * @return ActorSerializerInterface|null The serializer
     */
    public function getActorSerializer(): ?ActorSerializerInterface;

    /**
     * Sets the {@link DocumentDataSerializerInterface document data serializer}.
     *
     * @param DocumentDataSerializerInterface $documentDataSerializer The serializer
     */
    public function setDocumentDataSerializer(DocumentDataSerializerInterface $documentDataSerializer);

    /**
     * Returns the {@link DocumentDataSerializerInterface document data serializer}.
     *
     * @return DocumentDataSerializerInterface|null The serializer
     */
    public function getDocumentDataSerializer(): ?DocumentDataSerializerInterface;

    /**
     * Sets the {@link ActivitySerializerInterface activity serializer}.
     *
     * @param ActivitySerializerInterface $activitySerializer The serializer
     */
    public function setActivitySerializer(ActivitySerializerInterface $activitySerializer);

    /**
     * Returns the {@link ActivitySerializerInterface activity serializer}.
     *
     * @return ActivitySerializerInterface|null The serializer
     */
    public function getActivitySerializer(): ?ActivitySerializerInterface;

    /**
     * Sets the {@link PersonSerializerInterface person serializer}.
     *
     * @param PersonSerializerInterface $personSerializer The serializer
     */
    public function setPersonSerializer(PersonSerializerInterface $personSerializer);

    /**
     * Returns the {@link PersonSerializerInterface person serializer}.
     *
     * @return PersonSerializerInterface|null The serializer
     */
    public function getPersonSerializer(): ?PersonSerializerInterface;

    /**
     * Sets the {@link StateDocumentSerializerInterface state document serializer}.
     *
     * @param StateDocumentSerializerInterface $stateDocumentSerializer The serializer
     */
    public function setStateDocumentSerializer(StateDocumentSerializerInterface $stateDocumentSerializer);

    /**
     * Returns the {@link StateDocumentSerializerInterface state document serializer}.
     *
     * @return StateDocumentSerializerInterface|null The serializer
     */
    public function getStateDocumentSerializer(): ?StateDocumentSerializerInterface;
}

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
 * Handles the creation of serializer objects.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
interface SerializerFactoryInterface
{
    /**
     * Creates an activity serializer.
     */
    public function createActivitySerializer(): ActivitySerializerInterface;

    /**
     * Creates an actor serializer.
     */
    public function createActorSerializer(): ActorSerializerInterface;

    /**
     * Creates a document data serializer.
     */
    public function createDocumentDataSerializer(): DocumentDataSerializerInterface;


    /**
     * Creates a person serializer.
     */
    public function createPersonSerializer(): PersonSerializerInterface;

    /**
     * Creates a state document serializer.
     */
    public function createStateDocumentSerializer(): StateDocumentSerializerInterface;

    /**
     * Creates a statement result serializer.
     */
    public function createStatementResultSerializer(): StatementResultSerializerInterface;

    /**
     * Creates a statement serializer.
     */
    public function createStatementSerializer(): StatementSerializerInterface;

    /**
     * Creates a state serializer.
     */
    public function createStateSerializer(): StateSerializerInterface;
}

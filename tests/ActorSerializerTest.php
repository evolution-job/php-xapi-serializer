<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApi\Serializer\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use Xabbuh\XApi\Model\Actor;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
abstract class ActorSerializerTest extends SerializerTest
{
    private $actorSerializer;

    protected function setUp(): void
    {
        $this->actorSerializer = $this->createActorSerializer();
    }

    #[DataProvider('serializeData')]
    public function testSerializeActor(Actor $actor, string $expectedJson): void
    {
        $this->assertJsonStringEqualsJsonString($expectedJson, $this->actorSerializer->serializeActor($actor));
    }

    public static function serializeData(): array
    {
        return self::buildSerializeTestCases('Actor');
    }

    #[DataProvider('deserializeData')]
    public function testDeserializeActor($json, Actor $expectedActor): void
    {
        $actor = $this->actorSerializer->deserializeActor($json);

        $this->assertInstanceOf(Actor::class, $actor);
        $this->assertTrue($expectedActor->equals($actor), 'Deserialized actor has the expected properties');
    }

    public static function deserializeData(): array
    {
        return self::buildDeserializeTestCases('Actor');
    }

    abstract protected function createActorSerializer();
}

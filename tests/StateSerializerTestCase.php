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
use Xabbuh\XApi\Model\State;
use Xabbuh\XApi\Serializer\StateSerializerInterface;

/**
 * @author Mathieu Boldo <mathieu.boldo@entrili.com>
 */
abstract class StateSerializerTestCase extends SerializerTestCase
{
    private StateSerializerInterface $stateSerializer;

    protected function setUp(): void
    {
        $this->stateSerializer = $this->createStateSerializer();
    }

    #[DataProvider('serializeData')]
    public function testSerializeState(State $state, string $expectedJson): void
    {
        $this->assertJsonStringEqualsJsonString($expectedJson, $this->stateSerializer->serializeState($state));
    }

    public static function serializeData(): array
    {
        $testCases = [];

        foreach (self::buildSerializeTestCases('State') as $fixtures) {
            if ($fixtures[0] instanceof State) {
                $testCases[] = $fixtures;
            }
        }

        return $testCases;
    }

    #[DataProvider('deserializeData')]
    public function testDeserializeState($json, State $expectedState): void
    {
        $state = $this->stateSerializer->deserializeState($json);

        $this->assertInstanceOf(State::class, $state);
        $this->assertTrue($expectedState->equals($state));
    }

    public static function deserializeData(): array
    {
        $testCases = [];

        foreach (self::buildDeserializeTestCases('State') as $fixtures) {
            if ($fixtures[1] instanceof State) {
                $testCases[] = $fixtures;
            }
        }

        return $testCases;
    }

    abstract protected function createStateSerializer(): StateSerializerInterface;
}

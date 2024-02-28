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
use Xabbuh\XApi\Model\Person;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
abstract class PersonSerializerTest extends SerializerTest
{
    private $personSerializer;

    protected function setUp(): void
    {
        $this->personSerializer = $this->createPersonSerializer();
    }

    #[DataProvider('serializeData')]
    public function testSerializeActor(Person $person, string $expectedJson): void
    {
        $this->assertJsonStringEqualsJsonString($expectedJson, $this->personSerializer->serializePerson($person));
    }

    public static function serializeData(): array
    {
        return self::buildSerializeTestCases('Person');
    }

    abstract protected function createPersonSerializer();
}

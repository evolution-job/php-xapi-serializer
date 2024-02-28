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
use Xabbuh\XApi\Model\StateDocument;

/**
 * @author Jérôme Parmentier <jerome.parmentier@acensi.fr>
 */
abstract class StateDocumentSerializerTest extends SerializerTest
{
    private $stateDocumentSerializer;

    protected function setUp(): void
    {
        $this->stateDocumentSerializer = $this->createStateDocumentSerializer();
    }

    #[DataProvider('serializeData')]
    public function testSerializeStateDocument(StateDocument $stateDocument, string $expectedJson): void
    {
        $this->assertJsonStringEqualsJsonString($expectedJson, $this->stateDocumentSerializer->serializeStateDocument($stateDocument));
    }

    public static function serializeData(): array
    {
        return self::buildSerializeTestCases('StateDocument');
    }

    #[DataProvider('deserializeData')]
    public function testDeserializeStateDocument($json, StateDocument $expectedStateDocument): void
    {
        $stateDocument = $this->stateDocumentSerializer->deserializeStateDocument($json);

        $this->assertInstanceOf(StateDocument::class, $stateDocument);
        $this->assertTrue($expectedStateDocument->equals($stateDocument), 'Deserialized state document has the expected properties');
    }

    public static function deserializeData(): array
    {
        return self::buildDeserializeTestCases('StateDocument');
    }

    abstract protected function createStateDocumentSerializer();
}
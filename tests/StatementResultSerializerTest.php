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
use Xabbuh\XApi\Model\IRL;
use Xabbuh\XApi\Model\StatementResult;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
abstract class StatementResultSerializerTest extends SerializerTest
{
    private $statementResultSerializer;

    protected function setUp(): void
    {
        $this->statementResultSerializer = $this->createStatementResultSerializer();
    }

    #[DataProvider('serializeData')]
    public function testSerializeStatementResult(StatementResult $statementResult, string $expectedJson): void
    {
        $this->assertJsonStringEqualsJsonString($expectedJson, $this->statementResultSerializer->serializeStatementResult($statementResult));
    }

    public static function serializeData(): array
    {
        return self::buildSerializeTestCases('StatementResult');
    }

    #[DataProvider('deserializeData')]
    public function testDeserializeStatementResult($json, StatementResult $expectedStatementResult): void
    {
        $statementResult = $this->statementResultSerializer->deserializeStatementResult($json);

        $this->assertInstanceOf(StatementResult::class, $statementResult);

        $expectedStatements = $expectedStatementResult->getStatements();
        $statements = $statementResult->getStatements();

        $this->assertCount(count($expectedStatements), $statements, 'Statement result sets have the same size');

        foreach ($expectedStatements as $key => $expectedStatement) {
            $this->assertTrue($expectedStatement->equals($statements[$key]), 'Statements in result are the same');
        }

        if (!$expectedStatementResult->getMoreUrlPath() instanceof IRL) {
            $this->assertNull($statementResult->getMoreUrlPath(), 'The more URL path is null');
        } else {
            $this->assertTrue($expectedStatementResult->getMoreUrlPath()->equals($statementResult->getMoreUrlPath()), 'More URL paths are equal');
        }
    }

    public static function deserializeData(): array
    {
        return self::buildDeserializeTestCases('StatementResult');
    }

    abstract protected function createStatementResultSerializer();
}

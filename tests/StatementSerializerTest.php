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
use Xabbuh\XApi\DataFixtures\StatementFixtures;
use Xabbuh\XApi\Model\Statement;
use XApi\Fixtures\Json\StatementJsonFixtures;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
abstract class StatementSerializerTest extends SerializerTest
{
    private $statementSerializer;

    protected function setUp(): void
    {
        $this->statementSerializer = $this->createStatementSerializer();
    }

    #[DataProvider('serializeData')]
    public function testSerializeStatement(Statement $statement, string $expectedJson): void
    {
        $this->assertJsonStringEqualsJsonString($expectedJson, $this->statementSerializer->serializeStatement($statement));
    }

    public static function serializeData(): array
    {
        $testCases = [];

        foreach (self::buildSerializeTestCases('Statement') as $fixtures) {
            if ($fixtures[0] instanceof Statement) {
                if ($fixtures[0]->getVerb()->isVoidVerb()) {
                    $fixtures[0] = StatementFixtures::getVoidingStatement(StatementFixtures::DEFAULT_STATEMENT_ID);
                }

                $testCases[] = $fixtures;
            }
        }

        return $testCases;
    }

    #[DataProvider('deserializeData')]
    public function testDeserializeStatement($json, Statement $expectedStatement): void
    {
        $attachments = [];

        if (null !== $expectedStatement->getAttachments()) {
            foreach ($expectedStatement->getAttachments() as $attachment) {
                $attachments[$attachment->getSha2()] = ['type' => $attachment->getContentType(), 'content' => $attachment->getContent()];
            }
        }

        $statement = $this->statementSerializer->deserializeStatement($json, $attachments);

        $this->assertInstanceOf(Statement::class, $statement);
        $this->assertTrue($expectedStatement->equals($statement));
    }

    public static function deserializeData(): array
    {
        $testCases = [];

        foreach (self::buildDeserializeTestCases('Statement') as $fixtures) {
            if ($fixtures[1] instanceof Statement) {
                if ($fixtures[1]->getVerb()->isVoidVerb()) {
                    $fixtures[1] = StatementFixtures::getVoidingStatement(StatementFixtures::DEFAULT_STATEMENT_ID);
                }

                $testCases[] = $fixtures;
            }
        }

        return $testCases;
    }

    public function testDeserializeStatementCollection(): void
    {
        /** @var Statement[] $statements */
        $statements = $this->statementSerializer->deserializeStatements(
            StatementJsonFixtures::getStatementCollection()
        );
        $expectedCollection = StatementFixtures::getStatementCollection();

        $this->assertCount(count($expectedCollection), $statements);

        foreach ($expectedCollection as $index => $expectedStatement) {
            $this->assertTrue($expectedStatement->equals($statements[$index]));
        }
    }

    abstract protected function createStatementSerializer();
}

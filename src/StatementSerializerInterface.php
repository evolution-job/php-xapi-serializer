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

use Xabbuh\XApi\Common\Exception\UnsupportedStatementVersionException;
use Xabbuh\XApi\Model\Statement;

/**
 * Serialize and deserialize {@link Statement statements}.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
interface StatementSerializerInterface
{
    /**
     * Serializes a statement into a JSON encoded string.
     *
     * @param Statement $statement The statement to serialize
     *
     * @throws UnsupportedStatementVersionException When the version of the statement to be serialized is not supported
     *
     * @return string The serialized statement
     */
    public function serializeStatement(Statement $statement): string;

    /**
     * Serializes a collection of statements into a JSON encoded string.
     *
     * @param Statement[] $statements The statements to serialize
     *
     * @throws UnsupportedStatementVersionException When the version of the statement to be serialized is not supported
     *
     * @return string The serialized statements
     */
    public function serializeStatements(array $statements): string;

    /**
     * Parses a serialized statement.
     *
     * @param string $data        The serialized statement
     * @param array  $attachments The raw attachment data, a mapping of SHA-2 hashes to attachments data (the data is an
     *                            array with the keys type, the attachment's MIME type, and content, the attachment's raw
     *                            content data)
     *
     * @return Statement The parsed statement
     *@throws UnsupportedStatementVersionException When the version of the serialized statement is not supported
     *
     */
    public function deserializeStatement(string $data, array $attachments = []): Statement;

    /**
     * Parses a serialized collection of statements.
     *
     * @param string $data        The serialized statements
     * @param array  $attachments The raw attachment data, a mapping of SHA-2 hashes to attachments data (the data is an
     *                            array with the keys type, the attachment's MIME type, and content, the attachment's raw
     *                            content data)
     *
     * @return Statement[] The parsed statements
     *@throws UnsupportedStatementVersionException When the version of the serialized statement is not supported
     *
     */
    public function deserializeStatements(string $data, array $attachments = []): array;
}

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


use Xabbuh\XApi\Model\State;

/**
 * Serialize and deserialize {@link State states}.
 *
 * @author Mathieu Boldo <mathieu.boldo@entrili.com>
 */
interface StateSerializerInterface
{
    /**
     * Serializes a state into a JSON encoded string.
     *
     * @param State $state The state to serialize
     *
     * @return string The serialized state
     */
    public function serializeState(State $state): string;

    /**
     * Parses a serialized state.
     *
     * @param string $state The serialized state
     *
     * @return State The parsed state
     */
    public function deserializeState(string $state, ?string $data = null): State;
}

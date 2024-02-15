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
 * @author Jérôme Parmentier <jerome.parmentier@acensi.fr>
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
    public function serializeState(State $state);

    /**
     * Serializes a collection of states into a JSON encoded string.
     *
     * @param State[] $states The states to serialize
     *
     * @return string The serialized states
     */
    public function serializeStates(array $states);

    /**
     * Parses a serialized state.
     *
     * @param array $state The serialized state
     * @param string $data
     *
     * @return State The parsed state
     */
    public function deserializeState($state, $data = null);

    /**
     * Parses a serialized collection of states.
     *
     * @param string $state The serialized states
     * @param string $data
     *
     * @return State[] The parsed states
     */
    public function deserializeStates($state, $data = null);
}

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

use PHPUnit\Framework\TestCase;

abstract class SerializerTest extends TestCase
{
    protected static function buildSerializeTestCases(string $objectType): array
    {
        $tests = [];

        $phpFixturesClass = 'Xabbuh\XApi\DataFixtures\\' . $objectType . 'Fixtures';
        $jsonFixturesClass = 'XApi\Fixtures\Json\\' . $objectType . 'JsonFixtures';
        $jsonFixturesMethods = get_class_methods($jsonFixturesClass);

        foreach (get_class_methods($phpFixturesClass) as $method) {
            if (str_contains($method, 'ForQuery')) {
                continue;
            }

            // serialized data will always contain type information
            $jsonMethod = in_array($method . 'WithType', $jsonFixturesMethods) ? $method . 'WithType' : $method;

            $tests[$method] = [call_user_func([$phpFixturesClass, $method]), call_user_func([$jsonFixturesClass, $jsonMethod]),];
        }

        return $tests;
    }

    protected static function buildDeserializeTestCases(string $objectType): array
    {
        $tests = [];

        $jsonFixturesClass = 'XApi\Fixtures\Json\\' . $objectType . 'JsonFixtures';
        $phpFixturesClass = 'Xabbuh\XApi\DataFixtures\\' . $objectType . 'Fixtures';

        foreach (get_class_methods($jsonFixturesClass) as $method) {
            // PHP objects do not contain the type information as a dedicated property
            if (str_ends_with($method, 'WithType')) {
                continue;
            }

            $tests[$method] = [call_user_func([$jsonFixturesClass, $method]), call_user_func([$phpFixturesClass, $method]),];
        }

        return $tests;
    }
}

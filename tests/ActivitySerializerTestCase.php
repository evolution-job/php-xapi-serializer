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
use Xabbuh\XApi\Model\Activity;
use Xabbuh\XApi\Serializer\ActivitySerializerInterface;

/**
 * @author Jérôme Parmentier <jerome.parmentier@acensi.fr>
 */
abstract class ActivitySerializerTestCase extends SerializerTestCase
{
    private ActivitySerializerInterface $activitySerializer;

    protected function setUp(): void
    {
        $this->activitySerializer = $this->createActivitySerializer();
    }

    #[DataProvider('serializeData')]
    public function testSerializeActivity(Activity $activity, string $expectedJson): void
    {
        $this->assertJsonStringEqualsJsonString($expectedJson, $this->activitySerializer->serializeActivity($activity));
    }

    public static function serializeData(): array
    {
        return self::buildSerializeTestCases('Activity');
    }

    abstract protected function createActivitySerializer(): ActivitySerializerInterface;
}

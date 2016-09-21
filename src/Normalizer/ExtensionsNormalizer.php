<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApi\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Xabbuh\XApi\Model\Extensions;

/**
 * Normalizes and denormalizes xAPI extensions.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
final class ExtensionsNormalizer implements DenormalizerInterface, NormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        if (!$object instanceof Extensions) {
            return;
        }

        $extensions = $object->getExtensions();

        if (empty($extensions)) {
            return new \stdClass();
        }

        return $extensions;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
       return $data instanceof Extensions;
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        return new Extensions($data);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Xabbuh\XApi\Model\Extensions' === $type;
    }
}
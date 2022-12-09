<?php

namespace Simonetti\Rovereti\Tests;

use PHPUnit\Framework\AssertionFailedError;

trait AssertAttributeEqualsTrait
{
    protected static function assertAttributeEquals($expected, string $property, object $object): void
    {
        try {
            $reflectionClass = new \ReflectionClass($object);
            if ($reflectionClass->hasProperty($property) &&
                ! ($prop = $reflectionClass->getProperty($property))->isPublic()) {
                $prop->setAccessible(true);
                $value = $prop->getValue($object);
                $prop->setAccessible(false);
            } else {
                $value = $object->{$property};
            }
        } catch (\ReflectionException $e) {
            throw new AssertionFailedError($e->getMessage(), 0, $e);
        }

        self::assertEquals($expected, $value);
    }
}

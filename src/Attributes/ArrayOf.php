<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class ArrayOf
{
    /**
     * @param class-string $class Class name (model or enum)
     */
    public function __construct(public readonly string $class)
    {
    }
}

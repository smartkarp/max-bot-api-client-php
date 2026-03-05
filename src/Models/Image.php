<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models;

final class Image extends AbstractModel
{
    /**
     * @param string $url URL of image.
     */
    public function __construct(public readonly string $url)
    {
    }
}

<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Markup;

use BushlanovDev\MaxMessengerBot\Enums\MarkupType;
use BushlanovDev\MaxMessengerBot\Models\AbstractModel;

/**
 * Base class for a text markup element.
 */
abstract class AbstractMarkup extends AbstractModel
{
    /**
     * @param MarkupType $type The type of the markup element.
     * @param int $from Element start index (zero-based) in text.
     * @param int $length Length of the markup element.
     */
    public function __construct(
        public readonly MarkupType $type,
        public readonly int $from,
        public readonly int $length,
    ) {
    }
}

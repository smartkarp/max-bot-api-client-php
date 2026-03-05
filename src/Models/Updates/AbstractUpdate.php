<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Updates;

use BushlanovDev\MaxMessengerBot\Enums\UpdateType;
use BushlanovDev\MaxMessengerBot\Models\AbstractModel;

/**
 * `Update` object represents different types of events that happened in chat.
 */
abstract class AbstractUpdate extends AbstractModel
{
    /**
     * @param UpdateType $updateType Type of update.
     * @param int $timestamp Unix-time when event has occurred.
     */
    public function __construct(
        public readonly UpdateType $updateType,
        public readonly int $timestamp,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models;

/**
 * Object sent to bot when user presses a callback button.
 */
final class Callback extends AbstractModel
{
    /**
     * @param int $timestamp Unix-time when user pressed the button.
     * @param string $callbackId Identifier of the callback, unique for the message.
     * @param string $payload Payload from the pressed button.
     * @param UserWithPhoto $user User who pressed the button.
     */
    public function __construct(
        public readonly int $timestamp,
        public readonly string $callbackId,
        public readonly string $payload,
        public readonly UserWithPhoto $user,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Updates;

use BushlanovDev\MaxMessengerBot\Enums\UpdateType;
use BushlanovDev\MaxMessengerBot\Models\Callback;
use BushlanovDev\MaxMessengerBot\Models\Message;

/**
 * You will get this update as soon as a user presses a callback button.
 */
final class MessageCallbackUpdate extends AbstractUpdate
{
    /**
     * @param int $timestamp Unix-time when event has occurred.
     * @param Callback $callback The callback query itself.
     * @param Message|null $message Original message with the inline keyboard. Can be null if the message was deleted.
     * @param string|null $userLocale Current user locale in IETF BCP 47 format.
     */
    public function __construct(
        int $timestamp,
        public readonly Callback $callback,
        public readonly ?Message $message,
        public readonly ?string $userLocale,
    ) {
        parent::__construct(UpdateType::MessageCallback, $timestamp);
    }
}

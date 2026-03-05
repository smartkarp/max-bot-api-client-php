<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Updates;

use BushlanovDev\MaxMessengerBot\Enums\UpdateType;
use BushlanovDev\MaxMessengerBot\Models\UserWithPhoto;

/**
 * Event when a user mutes a conversation with a bot.
 */
final class DialogMutedUpdate extends AbstractUpdate
{
    /**
     * @param int $timestamp Unix-time when event has occurred.
     * @param int $chatId Dialog identifier where event has occurred.
     * @param UserWithPhoto $user User pressed the 'Start' button.
     * @param int|null $mutedUntil The time in Unix format before which the dialog was disabled.
     * @param string|null $userLocale Current user locale in IETF BCP 47 format.
     */
    public function __construct(
        int $timestamp,
        public readonly int $chatId,
        public readonly UserWithPhoto $user,
        public readonly ?int $mutedUntil,
        public readonly ?string $userLocale,
    ) {
        parent::__construct(UpdateType::DialogMuted, $timestamp);
    }
}

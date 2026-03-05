<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Updates;

use BushlanovDev\MaxMessengerBot\Enums\UpdateType;
use BushlanovDev\MaxMessengerBot\Models\UserWithPhoto;

/**
 * Bot gets this type of update as soon as the title has been changed in a chat.
 */
final class ChatTitleChangedUpdate extends AbstractUpdate
{
    /**
     * @param int $timestamp Unix-time when the event has occurred.
     * @param int $chatId Chat identifier where the event has occurred.
     * @param UserWithPhoto $user User who changed the title.
     * @param string $title The new title.
     */
    public function __construct(
        int $timestamp,
        public readonly int $chatId,
        public readonly UserWithPhoto $user,
        public readonly string $title,
    ) {
        parent::__construct(UpdateType::ChatTitleChanged, $timestamp);
    }
}

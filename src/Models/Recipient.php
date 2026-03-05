<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models;

use BushlanovDev\MaxMessengerBot\Enums\ChatType;

/**
 * Message recipient. Could be user or chat.
 */
final class Recipient extends AbstractModel
{
    /**
     * @param ChatType $chatType Chat type (dialog, chat or channel).
     * @param int|null $userId User identifier, if message was sent to user.
     * @param int|null $chatId Chat identifier.
     */
    public function __construct(
        public readonly ChatType $chatType,
        public readonly ?int $userId,
        public readonly ?int $chatId,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models;

use BushlanovDev\MaxMessengerBot\Models\Attachments\AbstractAttachment;
use BushlanovDev\MaxMessengerBot\Models\Markup\AbstractMarkup;

/**
 * Body of created message. Text + attachments.
 */
final class MessageBody extends AbstractModel
{
    /**
     * @param string $mid Unique identifier of message.
     * @param int $seq Sequence identifier of message in chat.
     * @param string|null $text Message text.
     * @param AbstractAttachment[]|null $attachments Message attachments.
     * @param AbstractMarkup[]|null $markup Message text markup.
     */
    public function __construct(
        public readonly string $mid,
        public readonly int $seq,
        public readonly ?string $text,
        public readonly ?array $attachments,
        public readonly ?array $markup,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads;

use BushlanovDev\MaxMessengerBot\Models\Attachments\Buttons\Inline\AbstractInlineButton;

final class InlineKeyboardAttachmentRequestPayload extends AbstractAttachmentRequestPayload
{
    /**
     * @param AbstractInlineButton[][] $buttons
     */
    public function __construct(
        public readonly array $buttons,
    ) {
    }
}

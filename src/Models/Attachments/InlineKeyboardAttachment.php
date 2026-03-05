<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;
use BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads\KeyboardPayload;

final class InlineKeyboardAttachment extends AbstractAttachment
{
    /**
     * @param KeyboardPayload $payload Keyboard payload.
     */
    public function __construct(public readonly KeyboardPayload $payload)
    {
        parent::__construct(AttachmentType::InlineKeyboard);
    }
}

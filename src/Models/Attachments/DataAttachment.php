<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;

/**
 * Represents an attachment containing a payload from a SendMessageButton.
 */
final class DataAttachment extends AbstractAttachment
{
    /**
     * @param string $data The payload from the button.
     */
    public function __construct(public readonly string $data)
    {
        parent::__construct(AttachmentType::Data);
    }
}

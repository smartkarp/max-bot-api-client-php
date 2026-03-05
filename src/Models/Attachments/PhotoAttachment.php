<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;
use BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads\PhotoAttachmentPayload;

final class PhotoAttachment extends AbstractAttachment
{
    /**
     * @param PhotoAttachmentPayload $payload Photo attachment payload.
     */
    public function __construct(public readonly PhotoAttachmentPayload $payload)
    {
        parent::__construct(AttachmentType::Image);
    }
}

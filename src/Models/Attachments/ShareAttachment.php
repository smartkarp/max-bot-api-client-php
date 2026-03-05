<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;
use BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads\ShareAttachmentRequestPayload;

/**
 * Represents a share (URL preview) attachment.
 */
final class ShareAttachment extends AbstractAttachment
{
    public function __construct(
        public readonly ShareAttachmentRequestPayload $payload,
        public readonly ?string $title,
        public readonly ?string $description,
        public readonly ?string $imageUrl,
    ) {
        parent::__construct(AttachmentType::Share);
    }
}

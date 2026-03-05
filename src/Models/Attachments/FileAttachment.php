<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;
use BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads\FileAttachmentPayload;

final class FileAttachment extends AbstractAttachment
{
    /**
     * @param FileAttachmentPayload $payload File attachment payload.
     * @param string $filename Uploaded file name.
     * @param int $size File size in bytes.
     */
    public function __construct(
        public readonly FileAttachmentPayload $payload,
        public readonly string $filename,
        public readonly int $size,
    ) {
        parent::__construct(AttachmentType::File);
    }
}

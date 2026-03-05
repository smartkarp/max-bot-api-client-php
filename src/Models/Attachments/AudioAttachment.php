<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;
use BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads\MediaAttachmentPayload;

final class AudioAttachment extends AbstractAttachment
{
    /**
     * @param MediaAttachmentPayload $payload Audio attachment payload.
     * @param string|null $transcription Audio transcription.
     */
    public function __construct(
        public readonly MediaAttachmentPayload $payload,
        public readonly ?string $transcription,
    ) {
        parent::__construct(AttachmentType::Audio);
    }
}

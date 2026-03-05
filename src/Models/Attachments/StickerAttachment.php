<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;
use BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads\StickerAttachmentPayload;

final class StickerAttachment extends AbstractAttachment
{
    /**
     * @param StickerAttachmentPayload $payload Sticker attachment payload.
     * @param int $width
     * @param int $height
     */
    public function __construct(
        public readonly StickerAttachmentPayload $payload,
        public readonly int $width,
        public readonly int $height,
    ) {
        parent::__construct(AttachmentType::Sticker);
    }
}

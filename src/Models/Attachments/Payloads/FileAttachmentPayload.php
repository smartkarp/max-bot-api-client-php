<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads;

use BushlanovDev\MaxMessengerBot\Models\AbstractModel;

/**
 * Payload for a file attachment.
 */
final class FileAttachmentPayload extends AbstractModel
{
    /**
     * @param string $url Media attachment URL.
     * @param string $token Token to reuse the same attachment in other messages.
     */
    public function __construct(
        public readonly string $url,
        public readonly string $token,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;

final class LocationAttachment extends AbstractAttachment
{
    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(
        public readonly float $latitude,
        public readonly float $longitude,
    ) {
        parent::__construct(AttachmentType::Location);
    }
}

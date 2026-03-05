<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads;

/**
 * Payload for a location attachment request.
 */
final class LocationAttachmentRequestPayload extends AbstractAttachmentRequestPayload
{
    /**
     * @param float $latitude Latitude as a floating-point number.
     * @param float $longitude Longitude as a floating-point number.
     */
    public function __construct(
        public readonly float $latitude,
        public readonly float $longitude,
    ) {
    }
}

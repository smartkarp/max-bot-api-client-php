<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments\Payloads;

/**
 * Payload for a contact attachment request.
 */
final class ContactAttachmentRequestPayload extends AbstractAttachmentRequestPayload
{
    /**
     * @param string|null $name Contact name.
     * @param int|null $contactId Contact identifier if it is a registered Max user.
     * @param string|null $vcfInfo Full information about the contact in VCF format.
     * @param string|null $vcfPhone Contact phone in VCF format.
     */
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?int $contactId = null,
        public readonly ?string $vcfInfo = null,
        public readonly ?string $vcfPhone = null,
    ) {
    }
}

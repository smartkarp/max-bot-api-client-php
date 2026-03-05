<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments;

use BushlanovDev\MaxMessengerBot\Enums\AttachmentType;
use BushlanovDev\MaxMessengerBot\Models\AbstractModel;

/**
 * Represents a generic attachment received from the API.
 */
abstract class AbstractAttachment extends AbstractModel
{
    public function __construct(public readonly AttachmentType $type)
    {
    }
}

<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments\Buttons\Reply;

use BushlanovDev\MaxMessengerBot\Enums\Intent;
use BushlanovDev\MaxMessengerBot\Enums\ReplyButtonType;

final class SendMessageButton extends AbstractReplyButton
{
    /**
     * @param string $text Visible text of the button.
     * @param string|null $payload Button payload.
     * @param Intent $intent Intent of button.
     */
    public function __construct(
        string $text,
        public readonly ?string $payload = null,
        public readonly Intent $intent = Intent::Default,
    ) {
        parent::__construct(ReplyButtonType::Message, $text);
    }
}

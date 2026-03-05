<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models\Attachments\Buttons\Inline;

use BushlanovDev\MaxMessengerBot\Enums\InlineButtonType;

/**
 * Button that creates a new chat associated with the message.
 * The bot will be added as an administrator by default.
 */
final class ChatButton extends AbstractInlineButton
{
    /**
     * @param string $text Visible text of the button (1 to 128 characters).
     * @param string $chatTitle Title of the chat to be created (max 200 characters).
     * @param string|null $chatDescription Optional chat description (max 400 characters).
     * @param string|null $startPayload Optional payload that will be sent to the bot in a `message_chat_created` update.
     * @param int|null $uuid Optional unique identifier for the button. If not passed, it will be generated.
     */
    public function __construct(
        string $text,
        public readonly string $chatTitle,
        public readonly ?string $chatDescription = null,
        public readonly ?string $startPayload = null,
        public readonly ?int $uuid = null,
    ) {
        parent::__construct(InlineButtonType::Chat, $text);
    }
}

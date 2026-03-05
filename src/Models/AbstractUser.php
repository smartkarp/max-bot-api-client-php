<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models;

abstract class AbstractUser extends AbstractModel
{
    /**
     * @param int $userId Users identifier.
     * @param string $firstName Users first name.
     * @param string|null $lastName Users last name.
     * @param string|null $username Unique public user name. Can be `null` if user is not accessible or it is not set.
     * @param bool $isBot Is the user a bot.
     * @param int $lastActivityTime Time of last user activity in Max (Unix timestamp in milliseconds).
     *                              Can be outdated if user disabled its "online" status in settings.
     */
    public function __construct(
        public readonly int $userId,
        public readonly string $firstName,
        public readonly ?string $lastName,
        public readonly ?string $username,
        public readonly bool $isBot,
        public readonly int $lastActivityTime,
    ) {
    }
}

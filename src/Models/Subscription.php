<?php

declare(strict_types=1);

namespace BushlanovDev\MaxMessengerBot\Models;

use BushlanovDev\MaxMessengerBot\Attributes\ArrayOf;
use BushlanovDev\MaxMessengerBot\Enums\UpdateType;

/**
 * Information about webhook subscriptions.
 */
final class Subscription extends AbstractModel
{
    /**
     * @param string $url URL webhook.
     * @param int $time Unix-time of creating a subscription.
     * @param UpdateType[]|null $updateTypes List of update types.
     * @param string|null $version Version of the API.
     */
    public function __construct(
        public readonly string $url,
        public readonly int $time,
        #[ArrayOf(UpdateType::class)]
        public readonly ?array $updateTypes,
        public readonly ?string $version,
    ) {
    }
}

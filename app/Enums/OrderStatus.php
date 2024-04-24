<?php

namespace App\Enums;

class OrderStatus
{
    const ORDERED = 'ordered';
    const PURCHASED = 'purchased';

    /**
     * Get all the order statuses.
     *
     * @return array<string>
     */
    public static function all(): array
    {
        return [
            self::ORDERED,
            self::PURCHASED,
        ];
    }
}

<?php

namespace App\Enums;

class Color
{
    const BW = 'bw';
    const COLOR = 'color';
    const BOTH = 'both';

    /**
     * Get all the colors.
     *
     * @return array<string>
     */
    public static function all(): array
    {
        return [
            self::BW,
            self::COLOR,
            self::BOTH
        ];
    }
}

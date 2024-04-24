<?php

namespace App\Enums;

class Grade
{
    const PRESCHOOL = 'preschool';
    const KINDERGARTEN = 'kindergarten';

    /**
     * Get all the grades.
     *
     * @return array<string>
     */
    public static function all(): array
    {
        return [
            self::PRESCHOOL,
            self::KINDERGARTEN,
        ];
    }
}

<?php

namespace App\Enums;

class Grade
{
    const PRIMARYSCHOOL = 'primaryschool';
    const CLASS5YEAROLD = '5yearold';
    const CLASS4YEAROLD = '4yearold';
    const CLASS3YEAROLD = '3yearold';
    const CLASS2YEAROLD = '2yearold';

    /**
     * Get all the grades.
     *
     * @return array<string>
     */
    public static function all(): array
    {
        return [
            self::PRIMARYSCHOOL,
            self::CLASS5YEAROLD,
            self::CLASS4YEAROLD,
            self::CLASS3YEAROLD,
            self::CLASS2YEAROLD,
        ];
    }
}

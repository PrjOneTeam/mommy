<?php

declare(strict_types=1);

namespace App\Models;

class Category
{
    public array $categories = [
        'maths' => [
            'name' => 'Maths',
            'sub' => [
                'patterns' => 'Patterns',
                'shapes' => 'Shapes',
                'sorting ' => 'Sorting ',
                'position' => 'Position',
                'measurements' => 'Measurements',
                'addition' => 'Addition',
                'subtraction' => 'Subtraction',
                'number_recognition' => 'Number Recognition',
                'quantity' => 'Quantity',
            ],
        ],
        'art_coloring' => [
            'name' => 'Art & Coloring',
            'sub' => [
                'coloring_page' => 'Coloring Page',
                'scissors' => 'Scissors',
                'dot_to_dot' => 'Dot to Dot',
                'color_by_number' => 'Color by Number',
                'drawing_and_coloring' => 'Drawing and Coloring',

            ]
        ],
        'writing' => [
            'name' => 'Writing',
            'sub' => [
                'pre_writing_tracing' => 'Pre-writing - Tracing',
                'writing_number' => 'Writing Number',
                'writing_letter' => 'Writing Letter',
            ]
        ]
    ];

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getSubCategories(string $category): array
    {
        return $this->categories[$category]['sub'] ?? [];
    }

    public function getNameCategory(string $category): string
    {
        if (isset($this->categories[$category])) {
            return $this->categories[$category]['name'];
        }

        foreach ($this->categories as $value) {
            if (isset($value['sub'][$category])) {
                return $value['sub'][$category];
            }
        }

        return '';
    }
}

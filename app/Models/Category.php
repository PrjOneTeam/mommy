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
                'sorting' => 'Sorting',
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
        ],
        'story' => [
            'name' => 'Story',
            'sub' => []
        ],
        'logic' => [
            'name' => 'Logic',
            'sub' => [
                'logic_table' => 'Logic Table',
                'matching_similar' => 'Match the Similar',
                'matching_shadow' => 'Match the Shadow',
                'practice_observation' => 'Practice Observation'
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

    public function getKeyValueCategories(): array
    {
        $categories = [];
        foreach ($this->categories as $key => $value) {
            $categories[$key] = $value['name'];
            foreach ($value['sub'] as $subKey => $subValue) {
                $categories[$subKey] = $subValue;
            }
        }

        return $categories;
    }
}

<?php

namespace App\Repositories;

use App\Models\Slug;
use App\Repositories\Repository;

class SlugRepository extends Repository
{
    public function __construct(Slug $slug)
    {
        parent::__construct($slug);
    }

    public function findBySlug(string $slug): ?Slug
    {
        return $this->model->where('slug', $slug)->first();
    }
}

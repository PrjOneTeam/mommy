<?php

namespace App\Repositories;

use App\Models\Review;
use App\Repositories\Repository;

class ReviewRepository extends Repository
{
    public function __construct(Review $review)
    {
        return parent::__construct($review);
    }
}

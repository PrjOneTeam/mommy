<?php

namespace App\Repositories;

use App\Models\Review;

class ReviewRepository
{
    protected $model;

    public function __construct(Review $review)
    {
        $this->model = $review;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(Review $review, array $data)
    {
        return $review->update($data);
    }

    public function delete(Review $review)
    {
        return $review->delete();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }
}

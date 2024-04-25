<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository
{
    protected $model;

    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(Comment $comment, array $data)
    {
        return $comment->update($data);
    }

    public function delete(Comment $comment)
    {
        return $comment->delete();
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

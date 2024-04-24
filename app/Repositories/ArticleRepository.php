<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    protected $model;

    public function __construct(Article $article)
    {
        $this->model = $article;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(Article $article, array $data)
    {
        return $article->update($data);
    }

    public function delete(Article $article)
    {
        return $article->delete();
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

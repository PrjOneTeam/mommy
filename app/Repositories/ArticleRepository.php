<?php

namespace App\Repositories;

use App\Models\Article;
use App\Repositories\Repository;

class ArticleRepository extends Repository
{
    public function __construct(Article $article)
    {
        parent::__construct($article);
    }
}

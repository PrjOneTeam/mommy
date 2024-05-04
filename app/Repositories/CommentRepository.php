<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\Repository;

class CommentRepository extends Repository
{
    public function __construct(Comment $comment)
    {
        return parent::__construct($comment);
    }
}

<?php

namespace App\Repositories;

use App\Models\Workbook;
use App\Repositories\Repository;

class WorkbookRepository extends Repository
{
    public function __construct(Workbook $workbook)
    {
        return parent::__construct($workbook);
    }

    public function findBySlug(string $slug): ?Workbook
    {
        return $this->model->where('slug', $slug)->first();
    }

    public function getActiveWorkbooks()
    {
        return $this->model->where('status', true)->get();
    }
}

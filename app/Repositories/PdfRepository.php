<?php

namespace App\Repositories;

use App\Models\Pdf;
use App\Repositories\Repository;

class PdfRepository extends Repository
{
    public function __construct(Pdf $pdf)
    {
        return parent::__construct($pdf);
    }

    public function findBySlug(string $slug): ?Pdf
    {
        return $this->model->where('slug', $slug)->first();
    }

    public function getKeyValuePdfs(): array
    {
        return $this->model->pluck('name', 'id')->toArray();
    }
}

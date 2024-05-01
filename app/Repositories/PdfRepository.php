<?php

namespace App\Repositories;

use App\Models\Pdf;

class PdfRepository
{
    protected $model;

    public function __construct(Pdf $pdf)
    {
        $this->model = $pdf;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(Pdf $pdf, array $data)
    {
        return $pdf->update($data);
    }

    public function delete(Pdf $pdf)
    {
        return $pdf->delete();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getKeyValuePdfs(): array
    {
        return $this->model->pluck('name', 'id')->toArray();
    }
}

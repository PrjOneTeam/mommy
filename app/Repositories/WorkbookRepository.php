<?php

namespace App\Repositories;

use App\Models\Workbook;

class WorkbookRepository
{
    protected $model;

    public function __construct(Workbook $workbook)
    {
        $this->model = $workbook;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(Workbook $workbook, array $data)
    {
        return $workbook->update($data);
    }

    public function delete(Workbook $workbook)
    {
        return $workbook->delete();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getActiveWorkbooks()
    {
        return $this->model->where('status', true)->get();
    }
}

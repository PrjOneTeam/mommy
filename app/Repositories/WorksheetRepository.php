<?php

namespace App\Repositories;

use App\Models\Pdf;
use App\Models\Workbook;
use Illuminate\Database\Eloquent\Collection;

class WorksheetRepository
{
    public function __construct(
        protected Workbook $workbook,
        protected Pdf $pdf,
    ) {
    }

    public function getWorksheets($grade = null, $topic = null, $f = null, $p = null): Collection
    {
        if ($grade) {
            $this->pdf->andWhere('grade', $grade);
            $this->workbook->andWhere('grade', $grade);
        }

        $pdfs = $this->pdf->get();
        $workbooks = $this->workbook->get();

        return $pdfs->concat($workbooks);
    }
}

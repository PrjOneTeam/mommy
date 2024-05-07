<?php

namespace App\Repositories;

use App\Models\Pdf;
use App\Models\Workbook;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;

class WorksheetRepository
{
    public const LIMIT = 24;

    protected int $totals = 0;

    public function __construct(
        protected Workbook $workbook,
        protected Pdf $pdf,
    ) {
    }

    public function getWorksheets(
        ?string $grade = null,
        ?string $topic = null,
        ?bool $f = false,
        ?int $p = null
    ): Collection
    {
        $pdfs = $this->pdf->when($topic, function(Builder $query, string $topic) {
            $query->whereJsonContains('topic', $topic);
        })->when($grade, function (Builder $query, string $grade) {
            $query->where('grade', $grade);
        })->when($f, function (Builder $query, bool $f) {
            if ($f) {
                $query->whereNull('price');
            }
        })->join(
            'slugs', 'pdfs.id', '=', 'slugs.pdf_id'
        )->select('pdfs.*', 'slugs.slug')->get();

        $workbooks = $this->workbook->when($topic, function(Builder $query, string $topic) {
            $query->whereJsonContains('topic', $topic);
        })->when($grade, function (Builder $query, string $grade) {
            $query->where('grade', $grade);
        })->when($f, function (Builder $query, bool $f) {
            if ($f) {
                $query->whereNull('price');
            }
        })->join(
            'slugs', 'workbooks.id', '=', 'slugs.workbook_id'
        )->select('workbooks.*', 'slugs.slug')->get();

        $worksheets = $pdfs->concat($workbooks)->sortByDesc('updated_at');
        $this->totals = $worksheets->count();

        if ($p && $p <= ceil($this->totals/self::LIMIT)) {
            $worksheets->splice(0, ($p-1) * self::LIMIT);
        }

        return $worksheets->take(self::LIMIT)->values();
    }

    public function getTotals(): int
    {
        return $this->totals;
    }

    public function getRelatedWorksheet($type, $topic)
    {
        return $this->{$type}->whereJsonContains('topic', $topic)->get();
    }
}
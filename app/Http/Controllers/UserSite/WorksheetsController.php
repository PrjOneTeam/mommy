<?php

declare(strict_types=1);

namespace App\Http\Controllers\UserSite;

use App\Enums\Grade;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\WorksheetRepository;
use Illuminate\Http\Request;

class WorksheetsController extends Controller
{
    public function __construct(
        private readonly Category $category,
        private readonly WorksheetRepository $worksheetRepository,
    ) {
    }

    public function index(Request $request, ?string $grade = null, ?string $topic = null): \Illuminate\Contracts\View\View
    {
        $grades = Grade::all();
        $f = (bool) $request->get('f');
        $p = (int) $request->get('p');

        $categoryKeys = array_keys($this->category->getKeyValueCategories());
        if ($grade && $topic) {
            if (!in_array($grade, $grades) || !in_array($topic, $categoryKeys)) {
                abort(404);
            }
        }

        if ($grade && !$topic && !in_array($grade, $grades)) {
            if (!in_array($grade, $categoryKeys)) {
                abort(404);
            }
            $topic = $grade;
            $grade = null;
        }

        $worksheets = $this->worksheetRepository->getWorksheets(
            $grade,
            $topic,
            $f,
            $p,
        );

        $totals = $this->worksheetRepository->getTotals();
        $perPage = $this->worksheetRepository::LIMIT;

        if ($p < 0) {
            $p = 1;
        }
        if ($p > ceil($totals / $perPage)) {
            $p = ceil($totals / $perPage);
        }

//        dd($p <= 0 ? 1 : min($p, ceil($totals / $perPage)), $perPage,$totals, $f);
        if ($request->ajax()) {
            return view('user-site.worksheets.content-box', [
                'grades' => $grades,
                'topics' => $this->category->getCategories(),
                'worksheets' => $worksheets,
                'page' => $p <= 0 ? 1 : min($p, ceil($totals / $perPage)),
                'per_page' => $perPage,
                'totals' => $totals,
                'f' => $f
            ]);
        }

        return view('user-site.worksheets', [
            'grades' => $grades,
            'topics' => $this->category->getCategories(),
            'worksheets' => $worksheets,
            'page' => $p <= 0 ? 1 : min($p, ceil($totals / $perPage)),
            'per_page' => $perPage,
            'totals' => $totals,
            'f' => $f,
        ]);
    }
}

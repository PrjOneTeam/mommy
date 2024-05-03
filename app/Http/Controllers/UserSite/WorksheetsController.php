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

        if ($grade) {
            if (!in_array($grade, $grades) && !in_array($grade, array_keys($this->category->getKeyValueCategories()))) {
                abort(404);
            }

            if ($topic && !in_array($grade, $grades)) {
                abort(404);
            }
        }

        $f = $request->get('f');
        $p = $request->get('p');

        $worksheets = $this->worksheetRepository->getWorksheets();

dd($worksheets);
        return view('user-site.worksheets', [
            'grades' => $grades,
            'topics' => $this->category->getCategories(),
        ]);
    }
}

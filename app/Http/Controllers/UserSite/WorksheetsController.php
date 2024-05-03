<?php

declare(strict_types=1);

namespace App\Http\Controllers\UserSite;

use App\Enums\Grade;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WorksheetsController extends Controller
{
    public function __construct(
        private readonly Category $category,
    ) {
    }

    public function index(Request $request, ?string $grade = null, ?string $topic = null): \Illuminate\Contracts\View\View
    {
        if ($grade) {
            $grades = Grade::all();
            $categories = array_keys($this->category->getKeyValueCategories());

            if (!in_array($grade, $grades) && !in_array($grade, $categories)) {
                abort(404);
            }

            if ($topic && !in_array($grade, $grades)) {
                abort(404);
            }
        }

        return view('user-site.worksheets');
    }
}

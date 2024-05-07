<?php

declare(strict_types=1);

namespace App\Http\Controllers\UserSite;

use App\Enums\Color;
use App\Helpers\Worksheet;
use App\Http\Controllers\Controller;
use App\Models\Pdf;
use App\Models\Workbook;
use App\Repositories\SlugRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DownloadController extends Controller
{
    public const DEFAULT_FILE = 'pdfs/welcome.txt';
    public function __construct(
        private readonly SlugRepository $slugRepository,
        private readonly Worksheet $worksheetHelper,
    ) {
    }

    public function download(Request $request, string $slug, string $color = Color::BW)
    {
        $slug = $this->slugRepository->findBySlug($slug);
        if ($slug === null) {
            return redirect()->route('user-site-home')->with('error', __("Worksheet not found"));
        }

        $isFree = $this->worksheetHelper->isFree($slug->pdf ?? $slug->workbook);
        $path = $this->getPathFile($slug->pdf ?? $slug->workbook, $color);
        $file = storage_path($path);

        if (file_exists($file) === false) {
            return redirect()->back()->with('error', __('Something went wrong'));
        }

        if ($isFree) {
            return response()->download($file);
        }

        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('error', __('Something went wrong'));
        }

        return response()->download($file);
    }

    private function getPathFile(Pdf|Workbook $worksheet, string $color): string
    {
        return match ($color) {
            Color::BW => $worksheet->files_bw ?? self::DEFAULT_FILE,
            Color::COLOR => $worksheet->files_color ?? self::DEFAULT_FILE,
            Color::BOTH => $worksheet->files_both ?? self::DEFAULT_FILE,

            default => self::DEFAULT_FILE,
        };
    }
}

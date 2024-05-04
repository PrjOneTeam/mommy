<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Models\Pdf;
use App\Models\Workbook;

class Worksheet
{
    public function isFree(Pdf|Workbook $worksheet): bool
    {
        if ($worksheet instanceof Pdf) {
            return !$worksheet->related_workbook;
        }

        return !$worksheet->price;
    }

    public function getWorkbookPrice(Workbook $workbook, bool $workbookBoth = false): float
    {
        if ($workbookBoth) {
            return $workbook->sale_price_both ?? $workbook->price_both;
        }

        return $workbook->sale_price ?? $workbook->price;
    }

    public function getWorksheetRoute(): string
    {
        return auth()->guard('admin')->check() ? 'admin.worksheets.index' : 'user-site.worksheets.index';
    }
}

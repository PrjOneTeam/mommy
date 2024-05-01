<?php

declare(strict_types=1);

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class File
{
    public function uploadFile(Request $request, string $fileRequest, string $storagePath = 'images'): string
    {
        if ($request->hasFile($fileRequest)) {
            $fileUpload = $request->file($fileRequest);
            if ($fileUpload instanceof UploadedFile) {
                $fileName = $fileUpload->getClientOriginalName();
                $fileUpload->move(storage_path($storagePath), $fileName);

                return sprintf('storage/%s/%s', $storagePath, $fileName);
            }
        }

        return '';
    }
}

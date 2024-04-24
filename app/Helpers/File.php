<?php

declare(strict_types=1);

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class File
{
    public function uploadFile(Request $request, string $fileRequest, string $storagePath = 'images'): void
    {
        if ($request->hasFile($fileRequest)) {
            $fileUpload = $request->file($fileRequest);
            if ($fileUpload instanceof UploadedFile) {
                $imageBwFilename = $fileUpload->getClientOriginalName();
                $fileUpload->move(storage_path($storagePath), $imageBwFilename);
            }
        }
    }
}

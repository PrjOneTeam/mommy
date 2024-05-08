<?php

namespace Database\Seeders;

use App\Enums\Grade;
use App\Enums\Image;
use App\Models\Pdf;
use App\Models\Slug;
use App\Models\Workbook;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class WorksheetSeeder extends Seeder
{
    const FILE_DEFAULT = 'pdfs/welcome.txt';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workbook::create([
            'id' => 1,
            'name' => 'Test workbook 100 price',
            'description' => 'Test workbook description',
            'price' => 100,
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
        ]);
        Workbook::create([
            'id' => 2,
            'name' => 'Test workbook 50 sale price',
            'description' => 'Test workbook description',
            'price' => 100,
            'sale_price' => 50,
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
        ]);
        Workbook::create([
            'id' => 3,
            'name' => 'Test workbook color',
            'description' => 'Test workbook description',
            'price' => 100,
            'sale_price' => 50,
            'files_color' => self::FILE_DEFAULT,
            'image_color' => Image::DEFAULT_IMAGE,
        ]);
        Workbook::create([
            'id' => 4,
            'name' => 'Test workbook color 2',
            'description' => 'Test workbook description',
            'price' => 100,
            'sale_price' => 50,
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
            'files_color' => self::FILE_DEFAULT,
            'image_color' => Image::DEFAULT_IMAGE,
        ]);
        Workbook::create([
            'id' => 5,
            'name' => 'Test workbook have both files',
            'description' => 'Test workbook description',
            'price' => 100,
            'sale_price' => 50,
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
            'files_color' => self::FILE_DEFAULT,
            'image_color' => Image::DEFAULT_IMAGE,
            'file_both' => self::FILE_DEFAULT,
            'image_both' => Image::DEFAULT_IMAGE,
        ]);
        Workbook::create([
            'id' => 6,
            'name' => 'Test workbook free',
            'description' => 'Test workbook description',
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
        ]);

        Pdf::create([
            'id' => 1,
            'name' => 'Test pdf free',
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
        ]);
        Pdf::create([
            'id' => 2,
            'name' => 'Test pdf 120 price',
            'price' => 120,
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
        ]);
        Pdf::create([
            'id' => 3,
            'name' => 'Test pdf 60 sale price',
            'price' => 120,
            'sale_price' => 60,
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
        ]);
        Pdf::create([
            'id' => 4,
            'name' => 'Test pdf have color',
            'price' => 120,
            'sale_price' => 60,
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
            'files_color' => self::FILE_DEFAULT,
            'image_color' => Image::DEFAULT_IMAGE,
        ]);
        Pdf::create([
            'id' => 5,
            'name' => 'Test pdf related workbooks',
            'files_bw' => self::FILE_DEFAULT,
            'image_bw' => Image::DEFAULT_IMAGE,
            'related_workbook' => [1, 2, 3],
        ]);

        Slug::create([
            'id' => 1,
            'slug' => 'workbook-1',
            'workbook_id' => 1,
            'pdf_id' => null,
        ]);
        Slug::create([
            'id' => 2,
            'slug' => 'workbook-2',
            'workbook_id' => 2,
            'pdf_id' => null,
        ]);Slug::create([
            'id' => 3,
            'slug' => 'workbook-3',
            'workbook_id' => 3,
            'pdf_id' => null,
        ]);
        Slug::create([
            'id' => 4,
            'slug' => 'workbook-4',
            'workbook_id' => 4,
            'pdf_id' => null,
        ]);
        Slug::create([
            'id' => 5,
            'slug' => 'workbook-5',
            'workbook_id' => 5,
            'pdf_id' => null,
        ]);
        Slug::create([
            'id' => 6,
            'slug' => 'workbook-6',
            'workbook_id' => 6,
            'pdf_id' => null,
        ]);
        Slug::create([
            'id' => 7,
            'slug' => 'pdf-1',
            'workbook_id' => null,
            'pdf_id' => 1,
        ]);
        Slug::create([
            'id' => 8,
            'slug' => 'pdf-2',
            'workbook_id' => null,
            'pdf_id' => 2,
        ]);
        Slug::create([
            'id' => 9,
            'slug' => 'pdf-3',
            'workbook_id' => null,
            'pdf_id' => 3,
        ]);
        Slug::create([
            'id' => 10,
            'slug' => 'pdf-4',
            'workbook_id' => null,
            'pdf_id' => 4,
        ]);
        Slug::create([
            'id' => 11,
            'slug' => 'pdf-5',
            'workbook_id' => null,
            'pdf_id' => 5,
        ]);

        for ($i=6; $i<=50; $i++) {
            Pdf::create([
                'id' => $i,
                'name' => 'Test pdf test '.$i,
                'files_bw' => self::FILE_DEFAULT,
                'image_bw' => Image::DEFAULT_IMAGE,
                'grade' => Grade::PRESCHOOL,
            ]);
            Slug::create([
                'id' => $i+6,
                'slug' => 'pdf-'.$i,
                'workbook_id' => null,
                'pdf_id' => $i,
            ]);
        }
    }
}

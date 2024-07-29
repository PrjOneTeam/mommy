<?php

use App\Models\Pdf;
use App\Models\Slug;
use App\Models\Workbook;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::namespace('App\Http\Controllers\Admin')
            ->middleware('web')
            ->prefix('admin')
            ->name('admin.')
            ->group(base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'customer' => \App\Http\Middleware\SetLocale::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            $adsWorkbook = Workbook::where('ads', 1)->first();
            if ($adsWorkbook != null) {
                $adsWorkbook->slug = Slug::where('workbook_id', $adsWorkbook->id)->first()->slug;
            }
            $adsPdf = Pdf::where('ads',1)->first();
            if ($adsPdf != null) {
                $adsPdf->slug = Slug::where('pdf_id', $adsPdf->id)->first()->slug;
            }

            return response()->view('user-site.worksheet-detail', [
                'type' => null,
                'worksheet' => null,
                'worksheetRelated' => null,
                'slug' => $slug->slug ?? null,
                'isPurchase' => false,
                'adsWorkbook' => $adsWorkbook,
                'adsPdf' => $adsPdf

            ]);
        });
    })->create();

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\File;
use App\Http\Controllers\Controller;
use App\Models\PaymentInfo;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{

    public function __construct(
        private readonly File $file,
    ) {
    }

    public function index(): View
    {
        $payment = PaymentInfo::first();

        return view('admin.payment.config', [
            'payment' => $payment,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'id' => 'nullable|integer',
            'bank_name' => 'required|string',
            'card_name' => 'required|string',
            'card_number' => 'required|string',
            'pictures' => 'nullable|image|mimes:jpg,jpeg,png|max:1048',
        ]);

        try {
            $count = PaymentInfo::count();

            if ($request->hasFile('qr')) {
                $data['qr'] = $this->file->uploadFile($request, 'qr');
            }

            if (isset($data['id']) && $count == 1) {
                $paymentInfo = PaymentInfo::findOrFail($data['id']);
                $paymentInfo->update($data);
            } else {
                if (PaymentInfo::count() > 1) {
                    PaymentInfo::truncate();
                }
                PaymentInfo::create($data);
            }

            return redirect()->route('admin.payment')
                ->with('success', __('Payment info updated successfully'));
        } catch (Exception $e) {
            Log::error('Error in ReviewController@store: ' . $e->getMessage(), [
                'request' => $request->all(),
                'trace' => $e->getTrace(),
            ]);

            return redirect()->route('admin.payment')
                ->with('error', __('Something went wrong'));
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Jobs\OrderTask;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Pdf;
use App\Models\Workbook;
use App\Repositories\OrderRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $listItem =  Order::all();
            $results = [];
            if (!Helper::getCookie('show_language')) {
                $flag = 'vn';
                Helper::setCookie('show_language', $flag);
            } else {
                $flag = Helper::getCookie('show_language');
            }
            $lang = config('lang_admin.'.$flag);

            if($listItem->count() > 0) {
                $results = $listItem->map(function($item) use ($lang) {
                    return [
                        'id' => $item->id,
                        'bill_info' => $item->bill_info,
                        'customer_email' => $item->customer_id ? Customer::findOrFail($item->customer_id)->email : $item->email,
                        'total' => $item->total,
                        'bill_code' => $item->bill_code,
                        'status' => $lang[$item->status],
                        'created_at' => Carbon::parse($item->created_at)->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::parse($item->updated_at)->format('Y-m-d H:i:s'),
                        'action' => Helper::renderInfoAction('order', $item->id)
                    ];
                });
            }
            return response()->json(['data' => $results]);
        }
        return view('admin.order.index');
    }

    public function show($id) { }

    public function purchased(int $id, OrderRepository $orderRepository)
    {
        $order = Order::findOrFail($id);
        if (!$order) {
            return redirect()->route('admin.order.index')->with('error', 'Đơn hàng không tồn tại!');
        }
        if ($order->status == Order::ORDERED_STATUS) {
            $order->status = Order::PURCHASED_STATUS;
            $order->save();
        }
        OrderTask::dispatch($order,$orderRepository);
        return redirect()->route('admin.order.index')->with('success', 'Đơn hàng đã được thanh toán thành công!');
    }

    public function edit(string $id, Request $request)
    {
        $order = Order::findOrFail($id);
        if ($request->ajax()) {
            $listItem =  OrderDetail::where('order_id', $id)->get();
            $data = [];

            if($listItem->count() > 0) {
                $results = $listItem->map(function($item) {
                    $type = null;
                    if ($item->workbook_id != null) {
                        $type = 'workbook';
                        $productName = Workbook::withTrashed()->find($item->workbook_id)->name;
                    } else {
                        $type = 'pdf';
                        $productName = Pdf::withTrashed()->find($item->pdf_id)->name;
                    }

                    return [
                        'id' => $item->id,
                        'type' => $type,
                        'product_name' => $productName,
                        'color' => $item->workbook_color != null ? $item->workbook_color : $item->pdf_color,
                        'price' => $item->price,
                        'sale_price' => $item->sale_price
                    ];
                });
            }
            return response()->json(['data' => $results]);
        }

        return view('admin.order.edit', compact('order'));
    }

    public function update(Request $request, string $id)
    {
        $params = $request->except('_method', '_token');

        $order = Order::findOrFail($id);
        $order->fill($params);
        $order->save();

        $flag = Helper::getCookie('show_language');
        $languages = config('lang_admin.'.$flag);

        return redirect()->route('admin.order.index')
            ->with('success', $params['public_name'] . ' '. $languages['messages']['update_success']);
    }

    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order_no = $order->id;
        $flag = Helper::getCookie('show_language');
        $languages = config('lang_admin.'.$flag);

        if($order->delete())
            return redirect()->route('admin.order.index')
                ->with('success', $order_no . ' '. $languages['messages']['delete_success']);
        else
            return redirect()->route('admin.order.index')
                ->with('error', $languages['messages']['delete_fail'] . ' '. $order_no);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $listItem =  Customer::all();
            $results = [];

            if($listItem->count() > 0) {
                $results = $listItem->map(function($item) {
                    return [
                        'id' => $item->id,
                        'name' => $item->first_name . ' ' . $item->last_name,
                        'email' => $item->email,
                        'location' => $item->location,
                        'role' => $item->role,
                        'created_at' => Carbon::parse($item->created_at)->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::parse($item->updated_at)->format('Y-m-d H:i:s'),
                        'action' => Helper::renderAction('customer', $item->id)
                    ];
                });
            }
            return response()->json(['data' => $results]);
        }
        return view('admin.customer.index');
    }

    public function show($id) { }

    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, string $id)
    {
        $params = $request->except('_method', '_token');

        $customer = Customer::findOrFail($id);
        $customer->fill($params);
        $customer->save();

        $flag = Helper::getCookie('show_language');
        $languages = config('lang_admin.'.$flag);

        return redirect()->route('admin.customer.index')
            ->with('success', $params['public_name'] . ' '. $languages['messages']['update_success']);
    }

    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $name = $customer->public_name;
        $flag = Helper::getCookie('show_language');
        $languages = config('lang_admin.'.$flag);

        if($customer->delete())
            return redirect()->route('admin.customer.index')
                ->with('success', $name . ' '. $languages['messages']['delete_success']);
        else
            return redirect()->route('admin.customer.index')
                ->with('error', $languages['messages']['delete_fail'] . ' '. $name);
    }
}

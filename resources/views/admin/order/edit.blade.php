@extends('admin.layouts.app')
@section('title', $order->id)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <a href="{{ route('admin.order.index') }}" class="text-muted mb-2 d-flex align-items-center" style="text-decoration:none">
                    <i class="c-icon c-icon-sm cil-arrow-left"></i>
                    <span class="ml-2">{{ $lang['back'] }}</span>
                </a>
                <h3 style="font-size:20px;text-transform:capitalize;font-weight:500;margin-bottom:30px;">
                    {{ $lang['order_no'] }}: <span class="text-danger">{{ $order->id }}</span>
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <table id="js_datatable" class="table table-responsive table-bordered table-striped">
                                <thead>
                                <tr role="row">
                                    <th>ID</th>
                                    <th>{{ $lang['product_name'] }}</th>
                                    <th>{{ $lang['color'] }}</th>
                                    <th>{{ $lang['price'] }}</th>
                                    <th>{{ $lang['sale_price'] }}</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('javascript')
        <script>
            $(document).ready(function () {
                var columnDefs = [
                    { "data": "id" },
                    { "data": "product_name" },
                    { "data": "color" },
                    { "data": "price" },
                    { "data": "sale_price" }
                ];

                var targets = [
                    { "width": 260, "targets": 1 },
                    { "width": 100, "targets": 2 },
                    { "width": 160, "targets": 3 }
                ];

                renderTable('/admin/order/' + {{ $order->id }} + '/edit', columnDefs, targets);
            });
        </script>
    @endsection
@endsection

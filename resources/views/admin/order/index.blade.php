@extends('admin.layouts.app')
@section('title', $lang['orders'])
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
               <h3 style="font-size:20px;text-transform:capitalize;font-weight:500">
                   {{ $lang['orders_list'] }}
               </h3>
           </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <table id="js_datatable" class="table table-responsive table-bordered table-striped">
                                <thead>
                                <tr role="row">
                                  	<th class="w68px"></th>
                                    <th>ID</th>
                                    <th>{{ $lang['customer_email'] }}</th>
                                    <th>{{ $lang['bill_info'] }}</th>
                                    <th>{{ $lang['total'] }}</th>
                                    <th>{{ $lang['status'] }}</th>
                                    <th>{{ $lang['bill_code'] }}</th>
                                    <th>{{ $lang['created_at'] }}</th>
                                    <th>{{ $lang['updated_at'] }}</th>
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
                    { "data": "action", "orderable": false },
                    { "data": "id" },
                    { "data": "customer_email" },
                    { "data": "bill_info" },
                    { "data": "total" },
                    { "data": "status" },
                    { "data": "bill_code" },
                    { "data": "created_at" },
                    { "data": "updated_at" }
                ];

                var targets = [
                    { "width": 160, "targets": 2 },
                    { "width": 100, "targets": 3 },
                    { "width": 160, "targets": 4 },
                    { "width": 160, "targets": 5 }
                ];

                renderTable('/admin/order', columnDefs, targets);
            });
        </script>
    @endsection
@endsection

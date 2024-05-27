@extends('admin.layouts.app')
@section('title', $lang['customers'])
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
               <h3 style="font-size:20px;text-transform:capitalize;font-weight:500">
                   {{ $lang['registered_customers'] }}
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
                                    <th>ID</th>
                                    <th>{{ $lang['full_name'] }}</th>
                                    <th>Email</th>
                                    <th>{{ $lang['location'] }}</th>
                                    <th>{{ $lang['role'] }}</th>
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
                renderTable('/admin/customer', JSON.parse('[\
                        { "data": "id" },\
                        { "data": "name" },\
                        { "data": "email" },\
                        { "data": "location" },\
                        { "data": "role" },\
                        { "data": "created_at" },\
                        { "data": "updated_at" }\
                    ]'), JSON.parse('[\
                        { "width": 160, "targets": 2 },\
                        { "width": 100, "targets": 3 },\
                        { "width": 160, "targets": 4 },\
                        { "width": 160, "targets": 5 }\
                    ]')
                )
            });
        </script>
    @endsection
@endsection

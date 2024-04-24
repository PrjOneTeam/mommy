@extends('admin.layouts.app')
@section('title', $lang['registered_customers'])
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
               <h3 style="font-size:20px;text-transform:capitalize;font-weight:500">
                   {{ $lang['registered_customers'] }}
               </h3>
               <a href="{{ route('admin.customer.create') }}" class="btn btn-info">
                   <i class="c-icon c-icon-sm cil-plus"></i> {{ $lang['create'] }}
               </a>
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
                                    <th>{{ $lang['full_name'] }}</th>
                                    <th>Email</th>
                                    <th>{{ $lang['phone'] }}</th>
                                    <th>{{ $lang['company'] }}</th>
                                    <th>Website</th>
                                    <th>Download tài liệu kĩ thuật</th>
                                    <th>{{ $lang['status'] }}</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
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
                renderTable('/v2/admin/customer', JSON.parse('[\
						{ "data": "action", "orderable": false },\
                        { "data": "id" },\
                        { "data": "name" },\
                        { "data": "email" },\
                        { "data": "phone" },\
                        { "data": "company" },\
                        { "data": "website" },\
                        { "data": "download" },\
                        { "data": "status" },\
                        { "data": "created_at" },\
                        { "data": "updated_at" }\
                    ]'), JSON.parse('[\
                        { "width": 160, "targets": 2 },\
                        { "width": 100, "targets": 8 },\
                        { "width": 160, "targets": 9 },\
                        { "width": 160, "targets": 10 }\
                    ]')
                )
            });
        </script>
    @endsection
@endsection

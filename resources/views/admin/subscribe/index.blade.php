@extends('admin.layouts.app')
@section('title', 'Đăng kí nhận thông tin')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-lg-9 d-flex justify-content-between align-items-center mb-3">
               <h3 style="font-size:20px;text-transform:capitalize;font-weight:500">
                   Đăng kí nhận thông tin
               </h3>
               {{-- <a href="{{ route('admin.subscribe.create') }}" class="btn btn-info">
                   <i class="c-icon c-icon-sm cil-plus"></i> {{ $lang['create'] }}
               </a> --}}
           </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
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
                                    <th>Category</th>
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
                renderTable('/v2/admin/subscribe', JSON.parse('[\
						{ "data": "action", "orderable": false },\
                        { "data": "id" },\
                        { "data": "name" },\
                        { "data": "email" },\
                        { "data": "phone" },\
                        { "data": "category" },\
                        { "data": "created_at" },\
                        { "data": "updated_at" }\
                    ]'), JSON.parse('[\
                        { "width": 150, "targets": 2 }\
                    ]')
                )
            });
        </script>
    @endsection
@endsection

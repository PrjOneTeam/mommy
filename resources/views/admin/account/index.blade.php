@extends('admin.layouts.app')
@section('title', 'Quản trị viên')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
               <h3 style="font-size:20px;text-transform:capitalize;font-weight:500">
                    Quản trị viên
               </h3>
               <a href="{{ route('admin.account.create') }}" class="btn btn-info">
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
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Trạng thái</th>
                                    <th>Vai trò</th>
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
                renderTable('/v2/admin/account', JSON.parse('[\
						{ "data": "action", "orderable": false },\
                        { "data": "id" },\
                        { "data": "name" },\
                        { "data": "email" },\
                        { "data": "user_id" },\
                        { "data": "status" },\
                        { "data": "role" },\
                        { "data": "created_at" },\
                        { "data": "updated_at" }\
                    ]'), JSON.parse('[\
                        { "width": 160, "targets": 1 }\
                    ]')
                )
            });
        </script>
    @endsection
@endsection

@extends('admin.layouts.app')
@section('title', __('Reviews'))
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
                <h3 style="font-size:20px;text-transform:capitalize;font-weight:500">
                    {{ __('Reviews') }}
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
                                    <th>{{ __('Workbook') }}</th>
                                    <th>{{ __('Public Name') }}</th>
                                    <th>{{ __('Rate') }}</th>
                                    <th>{{ __('Review') }}</th>
                                    <th>{{ __('created_at') }}</th>
                                    <th>{{ __('updated_at') }}</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            renderTable('/admin/review', JSON.parse('[\
						{ "data": "action", "orderable": false },\
                        { "data": "id" },\
                        { "data": "workbook" },\
                        { "data": "public_name" },\
                        { "data": "rate" },\
                        { "data": "review" },\
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
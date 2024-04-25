@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="bg-info p-3 mfe-3">
                            <i class="c-icon c-icon-2xl cil-user"></i>
                        </div>
                        <div>
                            <div class="text-value text-info" style="font-size:22px">
                                {{ \App\Models\User::count() }}
                            </div>
                            <div class="text-muted text-uppercase font-weight-bold small">
                                Thành viên
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="bg-success p-3 mfe-3">
                            <i class="c-icon c-icon-2xl cil-square"></i>
                        </div>
                        <div>
                            <div class="text-value text-success" style="font-size:22px">
                                {{ \App\Models\User::count() }}
                            </div>
                            <div class="text-muted text-uppercase font-weight-bold small">
                                Sản phẩm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="bg-warning p-3 mfe-3">
                            <i class="c-icon c-icon-2xl cil-calendar"></i>
                        </div>
                        <div>
                            <div class="text-value text-warning" style="font-size:22px">
                                {{ \App\Models\User::count() }}
                            </div>
                            <div class="text-muted text-uppercase font-weight-bold small">
                                Sự kiện
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="bg-danger p-3 mfe-3">
                            <i class="c-icon c-icon-2xl cil-phone"></i>
                        </div>
                        <div>
                            <div class="text-value text-danger" style="font-size:22px">
                                {{ \App\Models\User::count() }}
                            </div>
                            <div class="text-muted text-uppercase font-weight-bold small">
                                Yêu cầu liên hệ<br>đang chờ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

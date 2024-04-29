@extends('admin.layouts.app')
@section('title', $customer->last_name . ' ' . $customer->first_name)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <a href="{{ route('admin.customer.index') }}" class="text-muted mb-2 d-flex align-items-center" style="text-decoration:none">
                    <i class="c-icon c-icon-sm cil-arrow-left"></i>
                    <span class="ml-2">{{ $lang['back'] }}</span>
                </a>
                <h3 style="font-size:20px;text-transform:capitalize;font-weight:500;margin-bottom:30px;">
                    {{ $lang['customers'] }}: <span class="text-danger">{{ $customer->last_name . ' ' . $customer->first_name }}</span>
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                        <form method="POST" action="{{ route('admin.customer.update', $customer->id) }}">
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{ $customer->id }}">
                            @include('admin.customer._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

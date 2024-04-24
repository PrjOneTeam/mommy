@extends('admin.layouts.app')
@section('title', $account->name)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 style="font-size:20px;font-weight:500;margin-bottom:30px;">
                    Tài khoản: <span class="text-danger">{{ $account->user_id }}</span>
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.profile.update', $account->id) }}">
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{ $account->id }}">
                            @include('admin.profile._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

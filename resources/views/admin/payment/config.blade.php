@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-10">
                <h3 style="font-size:20px;text-transform:capitalize;font-weight:500;margin-bottom:30px;">
                    {{ __('Payment information') }}
                </h3>
            </div>
            <div class="col-10 col-lg-10">
                <div class="card pt-3">
                    <form action="{{ route('admin.payment.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @if(isset($payment->id))
                            <input type="hidden" name="id" value="{{ $payment->id }}">
                        @endif
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">{{ __('Bank Name') }}</label>
                            <div class="col-sm-12">
                                <input type="text" id="title" name="bank_name" required value="{{ old('bank_name', $payment->bank_name ?? null) }}" class="form-control">
                            </div>
                            @error('bank_name')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">{{ __('Card name') }}</label>
                            <div class="col-sm-12">
                                <input type="text" id="title" name="card_name" required value="{{ old('card_name', $payment->card_name ?? null) }}" class="form-control">
                            </div>
                            @error('card_name')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">{{ __('Card number') }}</label>
                            <div class="col-sm-12">
                                <input type="text" id="title" name="card_number" required value="{{ old('card_number', $payment->card_number ?? null) }}" class="form-control">
                            </div>
                            @error('card_number')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


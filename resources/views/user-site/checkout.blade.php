@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <h1 class="hpage">@lang('app.payment_info')</h1>
        <div class="container" id="checkout">
            <div class="content-holder">
                <div class="content-box">
                    <div class="box-body">
                        <div class="col80" style="margin-top:10px;">
                            <div id="checkout-wrapper">
                                <div id="tab1" class="tabbody" style="border: none; padding-top: 10px">
                                    <div class="XMFormGroup" style="margin-bottom:10px;" id="Sectionpaymentmethod">
                                        <div id="SectionpaymentmethodSectionLabel" class="SectionLabel">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td>@lang('app.payment_method')</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row" style="padding: 10px">
                                            <div>
                                                <h5>@lang('app.bank_name')</h5>
                                                <h6 style="margin-left: 20px">{{ $payment?->bank_name }}</h6>
                                                <h5>@lang('app.account_name')</h5>
                                                <h6 style="margin-left: 20px">{{ $payment?->card_name }}</h6>
                                                <h5>@lang('app.account_number')</h5>
                                                <h6 style="margin-left: 20px">{{ $payment?->card_number }}</h6>
                                                <h5>@lang('app.trans_content')</h5>
                                                <h6 style="margin-left: 20px"> {{ $billCode ?? '' }} </h6>
                                                @if(isset($payment->qr))
                                                    <h5>{{__("QR")}}</h5>
                                                    <h6 style="margin-left: 20px">
                                                        <img src="{{ isset($payment->qr) ? asset($payment->qr) : asset('admin/assets/images/default_image.jpg') }}" alt="Image preview"
                                                             style="max-width: 200px; max-height: 200px; cursor: pointer">
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="XMFormGroup" style="margin-bottom:10px;" id="Section">
                                        <div id="SectionBodySection" class="XMFormBody">
                                            <table style="table-layout:fixed;margin-top:5px; width: 100%" class="rwd">
                                                <colgroup>
                                                    <col style="width:160px;">
                                                    <col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup>
                                                <tbody>
                                                <tr>
                                                    <td colspan="2" class="padleft">
                                                        <div style="word-wrap:break-word;">
                                                            <div class="mbo center">
                                                                <div style="background-color: #f6f6f6;border: 1px solid #e2e2e1; padding: 10px 20px;border-radius:5px;box-sizing: border-box;">
                                                                    <div style="font-size: 1.2em;margin-bottom: 10px;">{{__("This product is a")}} <strong>{{__("PDF digital download")}}</strong>.</div>
                                                                    <div>{{__("Be sure that you have an application to open this file type.")}}</div>
                                                                </div>
                                                            </div>
                                                            <form action="{{route('checkout.place-order')}}" method="post">
                                                                <input type="hidden" name="bill_code" value="{{ $billCode ??'' }}">
                                                                @if(!Auth::user())
                                                                    <div>
                                                                        <div class="form-group">
                                                                            <label for="public_name">Full Name:</label>
                                                                            <input type="text" class="form-control" id="public_name" name="full_name" required="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="public_name">Email:</label>
                                                                            <input type="text" class="form-control" id="public_name" name="email" required="">
                                                                        </div>
                                                                    </div>

                                                                @endif

                                                            <div class="cart-foot clearfix">
                                                                <div class="total-block horizontal">
                                                                    <div class="total-holder">
                                                                        <div class="total-basket">
                                                                            <div class="text">{{ count($cart->items) > 1 ? count($cart->items) . " " . __("items") : count($cart->items) . " " . __("item") }}</div>
                                                                        </div>
                                                                        <div class="total-frame">
                                                                            <div class="total-box">
                                                                                <span class="title">@lang('app.total')</span>
                                                                                <span class="cost">{{ number_format($cart->final_price, 0, ',', ',') }} VND</span>
                                                                            </div>
                                                                                @csrf
                                                                                <button type="submit" id="btnaction" name="btnaction" class="button btn-standout tall mto10">{{__("Complete Transaction")}}</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </form>

                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="mto"><i class="icon-arrow-left"></i><a href="/cart">{{__("Edit Cart")}}</a></div>
                            </div>
                        </div>
                        <div class="col20" id="checkout-sidebar">
                            <div class="cart-head">
                                <div class="text">{{ count($cart->items) > 1 ? count($cart->items) . " " . __("items") : count($cart->items) . " " . __("item") }} &nbsp; (<a href="/cart" class="small white">{{__("Edit Cart")}}</a>)</div>
                            </div>
                            <div class="cart-amounts">
                                @foreach($cart->items as $item)
                                    <div class="sb-cart-item cart-detail">
                                        <h2 style="margin-bottom:0">{{$item->worksheet_name}}</h2>
                                        <span class="semi-small">{{$item->color}}</span>
                                        <div class="price {{$item->sale_price !== null ? 'strike' : null}}">
                                            <span class="semi-small">{{ number_format($item->price, 0, ',', ',') }} VND</span>
                                        </div>
                                        @if($item->sale_price !== null)
                                            <div class="price sale">
                                                <span class="semi-small">{{ number_format($item->sale_price, 0, ',', ',') }} VND</span>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                                <div class="item">
                                    <table class="cart-amounts">
                                        <tbody>
                                        <tr>
                                            <td class="bold">@lang('app.total')</td>
                                            <td class="bold total amt">
                                                @if($cart->total_sale_price && $cart->total_sale_price < $cart->total_price)
                                                    <p class="semi-small strike">{{ number_format($cart->total_price, 0, ',', ',') }} VND</p>
                                                @endif
                                                <p class="sale">{{ number_format($cart->final_price, 0, ',', ',') }} VND</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

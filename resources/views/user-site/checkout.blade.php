@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <h1 class="hpage">Payment Info</h1>
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
                                                    <td>{{__("Payment Method")}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row" style="padding: 10px">
                                            <div>
                                                <h5>{{__("Tên ngân hàng")}}</h5>
                                                <h6 style="margin-left: 20px">Vietcombank</h6>
                                                <h5>{{__("Tên tài khoản")}}</h5>
                                                <h6 style="margin-left: 20px">Phan Anh Tuan</h6>
                                                <h5>{{__("Số tài khoản")}}</h5>
                                                <h6 style="margin-left: 20px">0491000163032</h6>
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
                                                            <div class="cart-foot clearfix">
                                                                <div class="total-block horizontal">
                                                                    <div class="total-holder">
                                                                        <div class="total-basket">
                                                                            <div class="text">{{ count($cart->items) > 1 ? count($cart->items) . " " . __("items") : count($cart->items) . " " . __("item") }}</div>
                                                                        </div>
                                                                        <div class="total-frame">
                                                                            <div class="total-box">
                                                                                <span class="title">{{__("Total")}}:</span>
                                                                                <span class="cost">{{ __("$") . $cart->final_price }}</span>
                                                                            </div>
                                                                            <form action="{{route('checkout.place-order')}}" method="post">
                                                                                @csrf
                                                                                <button type="submit" id="btnaction" name="btnaction" class="button btn-standout tall mto10">{{__("Complete Transaction")}}</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                            <span class="semi-small">{{__("$").$item->price}}</span>
                                        </div>
                                        @if($item->sale_price !== null)
                                            <div class="price sale">
                                                <span class="semi-small">{{__("$").$item->sale_price}}</span>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                                <div class="item">
                                    <table class="cart-amounts">
                                        <tbody>
                                        <tr>
                                            <td class="bold">{{__("Total")}}</td>
                                            <td class="bold total amt">
                                                @if($cart->total_sale_price && $cart->total_sale_price < $cart->total_price)
                                                    <p class="semi-small strike">{{__("$").$cart->total_price}}</p>
                                                @endif
                                                <p class="sale">{{__("$") . $cart->final_price}}</p>
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

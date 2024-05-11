@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <h1 class="hpage">@lang('app.cart')</h1>
        @if($cart)
        <div class="container">
            <div class="content-holder">
                <div class="content-box">
                    <div class="box-body">
                        <div class="col80">
                            <div class="cart-wrapper">
                                <ul class="list-holder cart-title clearfix">
                                    <li class="product">@lang('app.my_order')</li>
                                    <li class="price">@lang('app.price')</li>
                                    <li class="remove">@lang('app.remove')</li>
                                </ul>
                                <div class="cart-items-holder">
                                    <div class="cart-item">
                                        @foreach($cart->items as $item)
                                            <div class="cart-item-wrapper">
                                                <ul class="list-holder cart-detail clearfix">
                                                    <li class="product">
                                                        <div class="inner">
                                                            <h2 class="title" style="padding-bottom:0"><a href="{{$item->worksheet_slug}}">{{$item->worksheet_name}}</a></h2>
                                                            <span class="semi-small">@lang('app.color'): @lang('app.' . $item->color)<br></span>
                                                        </div>
                                                    </li>
                                                    <li class="price">
                                                        <div class="inner">
                                                            @if($item->sale_price !== null)
                                                                <span class="sale">{{'VND '.$item->sale_price}}</span><br>
                                                            @endif
                                                            <span class="{{ $item->sale_price !== null ? 'strike' : null }}">{{'VND '.$item->price}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <form action="{{route('cart.remove')}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="item_id" value="{{$item->id}}">
                                                            <button style="box-shadow: none !important; border: 0; background-color: white; color: red">X</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <a href="/worksheets" class="continue-shopping button small btn-gray">@lang('app.continue_shopping')</a>
                            <div class="mto30">
                                <div class="list-col2">
                                    <ul>
                                        <li>
                                            <span class="list-icon lock"></span>
                                            <span class="list-txt semi-small">
                                            <strong class="normal">Safe Shopping Guarantee</strong>
                                            <div>@lang('app.safe_guarantee_content')</div>
                                        </span>
                                        </li>
                                        <li>
                                            <span class="list-icon dollar"></span>
                                            <span class="list-txt semi-small">
                                            <strong class="normal">100% Satisfaction Guarantee</strong>
                                            <div>@lang('app.satisfaction_guarantee')<a href="/station/refund-policy">@lang('app.learn_more')</a>.</div>
                                        </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col20">
                            <div class="cart-head">
                                <div class="text">{{ count($cart->items) > 1 ? count($cart->items) . " " . __("items") : count($cart->items) . " " . __("item") }}</div>
                            </div>
                            <div class="cart-amounts">
                                <div class="item">
                                    <table class="cart-amounts">
                                        <tbody>
                                        <tr>
                                            <td class="bold">@lang('app.total')</td>
                                            <td class="bold total amt {{$cart->total_sale_price && $cart->total_sale_price < $cart->total_price ? 'strike' : null}}">{{__("VND").$cart->total_price}}</td>
                                            @if($cart->total_sale_price && $cart->total_sale_price < $cart->total_price)
                                                <td class="bold total sale">{{'VND '.$cart->final_price}}</td>
                                            @endif
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a class="button btn-standout full-width tall mto" href="/checkout">@lang('app.proceed_checkout')</a>
                            </div>
{{--                            <div class="section-box mto">--}}
{{--                                <h4>Questions?</h4>--}}
{{--                                <div class="section-body">--}}
{{--                                    <ul class="link-list">--}}
{{--                                        <li><a href="/refund-policy" title="View MyTeachingStation.com Refund Policy">Hassle Free Refund Policy</a></li>--}}
{{--                                        <li><a href="/sales-policy" title="View MyTeachingStation.com Sales Policy">Sales Policy</a></li>--}}
{{--                                        <li><a href="/privacy-statement" title="View MyTeachingStation.com Privacy Statement">Privacy Statement</a></li>--}}
{{--                                        <li><a href="/faq" title="View MyTeachingStation.com Frequently Asked Questions">Frequently Asked Questions</a></li>--}}
{{--                                        <li><a href="/contact" title="Contact MyTeachingStation.com">Contact Us</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="clearfix"></div>
    </div>
@endsection

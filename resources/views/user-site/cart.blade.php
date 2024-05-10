@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <h1 class="hpage">{{__("Shopping Cart")}}</h1>
        @if($cart)
        <div class="container">
            <div class="content-holder">
                <div class="content-box">
                    <div class="box-body">
                        <div class="col80">
                            <div class="cart-wrapper">
                                <ul class="list-holder cart-title clearfix">
                                    <li class="product">{{__("Product")}}</li>
                                    <li class="price">{{__("Price")}}</li>
                                    <li class="remove">{{__("Remove")}}</li>
                                </ul>
                                <div class="cart-items-holder">
                                    <div class="cart-item">
                                        @foreach($cart->items as $item)
                                            <div class="cart-item-wrapper">
                                                <ul class="list-holder cart-detail clearfix">
                                                    <li class="product">
                                                        <div class="inner">
                                                            <h2 class="title" style="padding-bottom:0"><a href="{{$item->worksheet_slug}}">{{$item->worksheet_name}}</a></h2>
                                                            <span class="semi-small">{{__("Color")}}: {{ $item->color == 'bw' ? __("Black and White") : __('Color') }}<br></span>
                                                        </div>
                                                    </li>
                                                    <li class="price">
                                                        <div class="inner">
                                                            @if($item->sale_price !== null)
                                                                <span class="sale">{{__("$").$item->sale_price}}</span><br>
                                                            @endif
                                                            <span class="{{ $item->sale_price !== null ? 'strike' : null }}">{{__("$").$item->price}}</span>
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
                            <a href="/worksheets" class="continue-shopping button small btn-gray">{{__("Continue shopping")}}</a>
                            <div class="mto30">
                                <div class="list-col2">
                                    <ul>
                                        <li>
                                            <span class="list-icon lock"></span>
                                            <span class="list-txt semi-small">
                                            <strong class="normal">Safe Shopping Guarantee</strong>
                                            <div>Our SSL servers ensure all orders placed through MyTeachingStatio.com are 100% secure and encrypted.</div>
                                        </span>
                                        </li>
                                        <li>
                                            <span class="list-icon dollar"></span>
                                            <span class="list-txt semi-small">
                                            <strong class="normal">100% Satisfaction Guarantee</strong>
                                            <div>If you are not entirely satisfied with your purchase, simply request a refund within 3 days of the date of purchase. <a href="/refund-policy">Learn more</a>.</div>
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
                                            <td class="bold">{{__("Total")}}</td>
                                            <td class="bold total amt {{$cart->total_sale_price && $cart->total_sale_price < $cart->total_price ? 'strike' : null}}">{{__("$").$cart->total_price}}</td>
                                            @if($cart->total_sale_price && $cart->total_sale_price < $cart->total_price)
                                                <td class="bold total sale">{{__("$").$cart->final_price}}</td>
                                            @endif
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a class="button btn-standout full-width tall mto" href="/checkout">{{__("Proceed to Checkout")}}</a>
                            </div>
                            <div class="center mto"><img src="/lib/theme/mts/images/secure-shopping.png" alt="100% Secure Shopping" title="SSL Protected Transactions"></div>
                            <div class="section-box mto">
                                <h4>Questions?</h4>
                                <div class="section-body">
                                    <ul class="link-list">
                                        <li><a href="/refund-policy" title="View MyTeachingStation.com Refund Policy">Hassle Free Refund Policy</a></li>
                                        <li><a href="/sales-policy" title="View MyTeachingStation.com Sales Policy">Sales Policy</a></li>
                                        <li><a href="/privacy-statement" title="View MyTeachingStation.com Privacy Statement">Privacy Statement</a></li>
                                        <li><a href="/faq" title="View MyTeachingStation.com Frequently Asked Questions">Frequently Asked Questions</a></li>
                                        <li><a href="/contact" title="Contact MyTeachingStation.com">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="clearfix"></div>
    </div>
@endsection

@extends('user-site.main')
@section('content-layout')
<div id="content-layout">
    <div class="container">
        <h1 class="hpage">@lang('app.my_order')</h1>
        <div class="content-left">
            <div class="content-holder">
                <div class="content-box" style="margin-bottom:15px;">
                    <div class="box-body">
                        <h2>@lang('app.list')</h2>
                        <div class="cart-wrapper">
                            <ul class="list-holder cart-title clearfix">
                                <li class="product">@lang('app.bill_info')</li>
                                <li class="price">@lang('app.bill_total')</li>
                            </ul>
                            <div class="cart-items-holder">
                                <div class="cart-item">
                                    @foreach($dataList as $item)
                                        <div class="cart-item-wrapper">
                                            <ul class="list-holder cart-detail clearfix">
                                                <li class="product">
                                                    <div class="inner">
                                                        <h2 class="title" style="padding-bottom:0"><a href="">@lang('app.bill_no'): {{$item->id}}</a></h2>
                                                        <span class="semi-small">@lang('app.order_date'): {{ $item->created_at  }}<br></span>
                                                    </div>
                                                </li>
                                                <li class="price">
                                                    <div class="inner">
                                                        <span>{{'VND ' .$item->total}}</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="content-box" style="margin-bottom:15px;">--}}
{{--                    <div class="box-body">--}}
{{--                        <h2>@lang('app.interested_in')</h2>--}}
{{--                        <div id="related-worksheets" class="crsl-nav">--}}
{{--                            <a href="#" class="previous">Previous</a>--}}
{{--                            <a href="#" class="next">Next</a>--}}
{{--                        </div>--}}
{{--                        <div class="crsl-items" data-navigation="related-worksheets" style="width: 100%; overflow: hidden;">--}}
{{--                            <div class="crsl-wrap" style="width: 915px; margin-left: -183px;">--}}
{{--                                <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/word-family/ed-word-family-printable-workbook" title="View ED Word Family Workbook product">--}}
{{--                                        <div class="bck"><img src="/vault/2599/store/small/ed-word-family-workbook.jpg" width="100%" alt=""></div>--}}
{{--                                        <figcaption>ED Word Family Workbook</figcaption></a>--}}
{{--                                </figure><figure class="crsl-item crsl-active" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/math/do-a-dot-numbers-0-10-activity-set" title="View Do-A-Dot Numbers 0-10 Activity Set product">--}}
{{--                                        <div class="bck"><img src="/vault/2599/store/small/do-a-dot-numbers-0-10-worksheets.jpg" width="100%" alt=""></div>--}}
{{--                                        <figcaption>Do-A-Dot Numbers 0-10 Activity Set</figcaption></a>--}}
{{--                                </figure>--}}
{{--                                <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/math/do-a-dot-numbers-0-10-activity-set" title="View Do-A-Dot Numbers 0-10 Activity Set product">--}}
{{--                                        <div class="bck"><img src="/vault/2599/store/small/do-a-dot-numbers-0-10-worksheets.jpg" width="100%" alt=""></div>--}}
{{--                                        <figcaption>Do-A-Dot Numbers 0-10 Activity Set</figcaption></a>--}}
{{--                                </figure>--}}
{{--                                <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/word-family/it-word-family-printable-workbook" title="View IT Word Family Workbook product">--}}
{{--                                        <div class="bck"><img src="/vault/2599/store/small/it-word-family-workbook.jpg" width="100%" alt=""></div>--}}
{{--                                        <figcaption>IT Word Family Workbook</figcaption></a>--}}
{{--                                </figure>--}}
{{--                                <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/word-family/an-word-family-printable-workbook" title="View AN Word Family Workbook product">--}}
{{--                                        <div class="bck"><img src="/vault/2599/store/small/an-word-family-workbook.jpg" width="100%" alt=""></div>--}}
{{--                                        <figcaption>AN Word Family Workbook</figcaption></a>--}}
{{--                                </figure>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="content-right">
            <div class="content-box">
                <div class="box-body">
                    <h2>@lang('app.menu')</h2>
                    <ul class="link-list">
                        <li><a href="/my-account">@lang('app.my_account')</a></li>
                        <li><a href="/my-purchases">@lang('app.my_purchase')</a></li>
                        <li class="active"><a href="/my-orders">@lang('app.my_order')</a></li>
                        <li><a href="/my-account/edit">@lang('app.edit_account')</a></li>
                        <li><a href="/my-account/change-password">@lang('app.change_pw')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection

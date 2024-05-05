<?php
    /**
     * @var App\Helpers\Worksheet $worksheetHelper
     */
?>
@if($worksheetHelper->isFree($worksheet))
    <div class="btn-download">
        <a class="sheet" href="/pub/article/download.cfm?uuid=24C4F490-B40B-4799-9CDE-36160D996FC4">
            <span class="ico"><i class="icon-worksheet"></i></span>
            <span class="lbl">{{__("Download")}}<small>{{__("FREE Worksheet")}}</small></span>
        </a>
        <div class="txt">{{__("PDF Digital Download")}}<br>2 Pages</div>
        <div class="clearfix"></div>
    </div>
@else
    @if($worksheet instanceof \App\Models\Pdf)
        @if($worksheet->related_workbook)
            <div class="paid-product-alert">
                {{__("This activity is")}} <span style="text-decoration:underline">{{__("only")}}</span> {{__("available for download in the related product(s) below.")}}
            </div>
            @include('user-site.worksheet-detail.related')
        @elseif($worksheet->price)
            @include('user-site.worksheet-detail.buy')
        @endif
    @endif

    @if($worksheet instanceof \App\Models\Workbook)
        @include('user-site.worksheet-detail.buy')
    @endif
@endif


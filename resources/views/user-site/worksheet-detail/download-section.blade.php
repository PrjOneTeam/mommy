<?php
    /**
     * @var App\Helpers\Worksheet $worksheetHelper
     */
?>
@if($worksheetHelper->isFree($worksheet))
    <div class="btn-download">
        <a class="sheet" href="{{ route('download', $slug, 'bw') }}">
            <span class="ico"><i class="icon-worksheet"></i></span>
            <span class="lbl">{{__("Download")}}<small>{{__("FREE Worksheet")}}</small></span>
        </a>
        <div class="txt">{{__("PDF Digital Download")}}<br></div>
        <div class="clearfix"></div>
    </div>
@else
    @if($worksheet instanceof \App\Models\Pdf && $worksheet->related_workbook)
        <div class="paid-product-alert">
            {{__("This activity is")}} <span style="text-decoration:underline">{{__("only")}}</span> {{__("available for download in the related product(s) below.")}}
        </div>
        @include('user-site.worksheet-detail.related')
    @else
        @include('user-site.worksheet-detail.buy')
    @endif
@endif


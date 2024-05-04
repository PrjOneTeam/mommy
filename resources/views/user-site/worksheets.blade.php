@extends('user-site.main')
@section('content-layout')
    <div class="container">
        <h1 class="hpage">Early Childhood Writing Worksheets</h1>
        <div class="promo-b mbo" id="math-promo" style="display:none;">
            <div class="promo-in">
                <div class="promo-left"><a href="/preschool-and-kindergarten-math-curriculum?utm_campaign=MTH&amp;utm_medium=MTS&amp;utm_source=product_list"><img src="/vault/2599/web/images/mts-math-curriculum-for-prescshool-and-kindergarten.jpg" alt="MTS Kindergarten Math Curriculum" title="MTS Math Program - Kindergarten Level" nopin="nopin" style="max-width:559px;width: 100%;"></a></div>
                <div class="promo-right">
                    <div class="hdr">MTS Math Program</div>
                    <div class="txt">Preschool and Kindergarten Math Curriculum</div>
                    <div class="large">
                        <div class="bt2 mto10"><a href="/preschool-and-kindergarten-math-curriculum?utm_campaign=MTH&amp;utm_medium=MTS&amp;utm_source=product_list" class="button btn">Click here for details</a></div>
                        <div class="bt"><img src="/lib/theme/mts/images/instant-download.jpg"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="promo-b mbo" id="wf-promo">
            <div class="promo-in">
                <div class="promo-left">
                    <div class="hdr">Word Family Workbook Bundle</div>
                    <div class="txt">22 Word Family Workbooks</div>
                    <div class="large">
                        <div class="bt2 mto10"><a href="/word-family/word-family-workbook-bundle" class="button btn">Click here for details</a></div>
                        <div class="bt"><img src="/lib/theme/mts/images/instant-download.jpg"></div>
                    </div>
                </div>
                <div class="promo-right">
                    <a href="/word-family/word-family-workbook-bundle"><img src="/vault/2599/web/images/word-family-worksheet-pdf-bundle.jpg" alt="Word Family Workbook Bundle" title="Word Family Workbook Bundle" nopin="nopin" style="max-width:559px;width: 100%;"></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="content-holder">
            <div class="open-slide"><a href="javascript:void(0);" id="filter-open">{{__("Filter")}}</a></div>
            @include('user-site.worksheets.filter')
            <div class="left-body">
                <div class="ploading"></div>
                <div id="worksheets-body">
                    @include('user-site.worksheets.content-box')
                </div>
            </div>
        </div>
    </div>
@endsection

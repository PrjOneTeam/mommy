@extends('user-site.main')
@section('content-layout')
<div class="section-banner">
    <div class="container">
        <div class="banner-wrap">
            <div class="banner">
                <a href="/{{$adsWorkbook->slug}}"><img style="max-height: 400px; max-width: 300px" src="{{ isset($adsWorkbook->image_bw) ? asset($adsWorkbook->image_bw) : (isset($adsWorkbook->image_color) ? asset($adsWorkbook->image_color) : asset('admin/assets/images/default_image.jpg'))  }}" alt="Printable Alphabet Activities Workbook Series" title="Learning the Alphabet Workbook Series" nopin="nopin"></a>
            </div>
            <div class="banner-clear"></div>
            <div class="descr">
                <h1>{{ $adsWorkbook->name }}<span>Workbook</span></h1>
                <p>
                    {{ $adsWorkbook->description }}
                    <em>@lang('app.home_invite')</em>
                </p>
                <div class="start-now"><a href="/{{$adsWorkbook->slug}}" class="button large">@lang('app.download_now')</a></div>
                <p></p>
            </div>
{{--            <div class="badges">--}}
{{--                <a href="/learning-the-alphabet?utm_campaign=LTA&amp;utm_medium=MTS&amp;utm_source=home_banner3"><img src="/vault/2599/web/images/alphabet-phonics-printable-workbook.png" alt="Available in Black-and-white and in color worksheets" title="The best phonics printable workbook" nopin="nopin"></a>--}}
{{--                <a href="/learning-the-alphabet?utm_campaign=LTA&amp;utm_medium=MTS&amp;utm_source=home_banner4"><img src="/vault/2599/web/images/the-ultimate-phonics.png" alt="Download phonics workbook" title="The ultimate phonics workbook" nopin="nopin"></a>--}}
{{--            </div>--}}
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="section-what">
    <div class="container">
        <div class="box">
            <a href="/article">
                <div class="img yellow">
                    <i class="icon-newspaper"></i>
                </div>
                <h2>@lang('app.home_article')</h2>
                @lang('app.home_sub_article')
            </a>
        </div>
        <div class="box">
            <a href="/worksheets/maths">
                <div class="img blue">
                    <i class="icon-products"></i>
                </div>
                <h2>@lang('app.Maths')</h2>
                @lang('app.home_sub_maths')
            </a>
        </div>
        <div class="box">
            <a href="/worksheets/art_coloring">
                <div class="img green">
                    <i class="icon-map"></i>
                </div>
                <h2>@lang('app.Art & Coloring')</h2>
                @lang('app.home_sub_art')
            </a>
        </div>
        <div class="box">
            <a href="/worksheets?f=1">
                <div class="img purple">
                    <i class="icon-worksheet"></i>
                </div>
                <h2>@lang('app.free_worksheet')</h2>
                @lang('app.home_sub_worksheet')
            </a>
        </div>
    </div>
</div>

<div class="section-worksheet">
    <div class="container">
        <h2>@lang('app.newest_workbook')</h2>
{{--        <div id="newly-added-worksheets" class="crsl-nav">--}}
{{--            <a href="#" class="previous">Previous</a>--}}
{{--            <a href="#" class="next">Next</a>--}}
{{--        </div>--}}
        <style>
            .crsl-item { max-width: 239px;}
        </style>
        <div class="crsl-items-home" data-navigation="newly-added-worksheets" style="width: 100%; overflow: hidden;">
            <div class="crsl-wrap" style="width: 6660px; margin-left: -222px;">
                @foreach($workbookList as $key => $workbook)
                    <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 212px; margin-right: 10px;">
                        <a href="/{{$workbook->slug}}">
                            <div class="bck"><img style="width: 200px; height: 250px" src="{{ isset($workbook->image_bw) ? asset($workbook->image_bw) : (isset($workbook->image_color) ? asset($workbook->image_color) : asset('admin/assets/images/default_image.jpg'))  }}" width="100%"></div>
                            <figcaption>{{ $workbook->name }}</figcaption>
                            <div class="olay">
                                <div class="pad">
                                    <h3>{{ $workbook->name }}</h3>
                                    <p>{{ $workbook->description }}</p>
                                </div>
                            </div>
                        </a>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{--<div class="section-banner wf">--}}
{{--    <div class="container">--}}
{{--        <div class="banner-wrap" style="position:relative">--}}
{{--            <div class="banner-clear"></div>--}}
{{--            <div class="descr wf">--}}
{{--                <h1 class="wf">22 Word Family Workbooks<span>Over 200 words!<br>Including CVC and CCVC words.</span></h1>--}}
{{--                <p class="wf">--}}
{{--                    The Word Family Workbooks provide fun-filled, engaging activities to help children learn to blend sounds, read, and write simple words.--}}
{{--                </p>--}}
{{--                <div class="start-now mbo"><a href="/word-family/word-family-workbook-bundle?utm_campaign=WF&amp;utm_medium=MTS&amp;utm_source=home_banner_wf" class="button large">Download Now</a></div>--}}
{{--                <p></p>--}}
{{--            </div>--}}
{{--            <div class="banner wf">--}}
{{--                <div class="wf-house">--}}
{{--                    <a href="/word-family/word-family-workbook-bundle?utm_campaign=WF&amp;utm_medium=MTS&amp;utm_source=home_banner_wf"><img src="/lib/theme/mts/images/wf-house.png" alt="Word Family House" title="Reading CVC words with Word Family worksheets" nopin="nopin" style="max-width:486px;width: 100%;"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div style="background-color:#7ec146; border-top:3px solid #71a942;border-bottom:5px solid #fff; height: 30px"></div>--}}
{{--</div>--}}

<div class="section-banner math">
    <div class="container">
        <div class="banner-wrap">
            <div class="banner math">
                <a href="/preschool-and-kindergarten-math-curriculum?utm_campaign=MTH&amp;utm_medium=MTS&amp;utm_source=home_banner1"><img style="max-height: 400px; max-width: 300px" src="{{ isset($adsPdf->image_bw) ? asset($adsPdf->image_bw) : (isset($adsPdf->image_color) ? asset($adsPdf->image_color) : asset('admin/assets/images/default_image.jpg'))  }}" alt="MTS Kindergarten Math Curriculum" title="MTS Math Program - Kindergarten Level" nopin="nopin" style="max-width:559px;width: 100%;"></a>
            </div>
            <div class="banner-clear"></div>
            <div class="descr math">
                <h1 class="math">{{  $adsPdf->name }}<span>PDF</span></h1>
                <p class="math">
                    {{$adsPdf->description}}
                </p>
                <div class="start-now mbo"><a href="/{{$adsPdf->slug}}" class="button large">@lang('app.download_now')</a></div>
                <p></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="section-article">
    <div class="container">
        <h2>@lang('app.home_article')</h2>
        <div id="article_results">
            <ul class="mts-col3 col4 clearfix">
                @foreach($articleList as $index => $article)
                    <li class="pgitem" style="">
                        <div id="view_portrait" class="pbox">
                            <div class="pimg">
                                <div class="img-wrap full"><a href="{{'/article/' .  $article->id . '/details'}}" title="{{ $article->title }}"><img src="{{ $article->pictures ? asset($article->pictures) : asset(\App\Enums\Image::DEFAULT_IMAGE) }}" ></a></div>
                            </div>
                            <div class="pdetail"><a href="{{'/article/' .  $article->id . '/details'}}" title="{{ $article->title }}">{{ $article->title }}</a></div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="clearfix"></div>

{{--<div class="section-signup">--}}
{{--    <div class="container">--}}
{{--        <h2>Exclusive Worksheets</h2>--}}
{{--        <div class="descr">Enter your email below to sign up and download exclusive worksheets for free!</div>--}}
{{--        <div class="xm-sm-loading optinfoot" id="optloading1137"></div>--}}
{{--        <form class="opt-in-form" id="leadBoxOptIn-1137">--}}
{{--            <input id="t" name="t" type="hidden" value="A66D2FAA-D4BE-D992-B8FAE05F81E4C851"><input id="p" name="p" type="hidden" value="/"><input id="confirm_path" name="confirm_path" type="hidden" value="join">--}}
{{--            <div id="optinfields1137">--}}
{{--                <div class="row-e"><input class="required" id="your_name" name="your_name" type="text"><input class="required-email" id="your_email" name="your_email" type="email"></div>--}}
{{--                <input id="lead_first_name" name="lead_first_name" placeholder="Your Name" type="text"><input id="email" name="email" placeholder="Your Email" type="email" autocomplete="off"> <input id="submit" name="submit" type="submit" value="Get Worksheets">--}}
{{--                <div class="optin-req" id="req1137">&nbsp;</div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection

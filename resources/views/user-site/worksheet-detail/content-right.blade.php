
<div class="content-right">
    @if($adsWorkbook !== null)
    <div class="content-box sboptin-holder">
        <div class="sb-lta-banner">
            <div class="spacer">
                <h2>{{ $adsWorkbook->name }}<span>Workbook</span></h2>
                <div class="center mto30 mbo50"><img src="{{ isset($adsWorkbook->image_bw) ? asset($adsWorkbook->image_bw) : (isset($adsWorkbook->image_color) ? asset($adsWorkbook->image_color) : asset('admin/assets/images/default_image.jpg'))  }}" /></div>
                <p>
                    {{ $adsWorkbook->description }}
                    <em>@lang('app.home_invite')</em>
                <div class="center mto mbo"><a href="/{{$adsWorkbook->slug}}" class="button">@lang('app.download_now')</a></div>
                </p>
            </div>
        </div>
    </div>
    @endif
    @if($adsPdf !== null)
    <div class="sidebanner-wrap">
        <div class="sidebanner-box">
            <div class="banner-title purple">{{  $adsPdf->name }}</div>
            <div class="banner-txt">
                <p>{{$adsPdf->description}}</p>
            </div>
            <div class="center mto10"><a href="/{{$adsPdf->slug}}"><img src="{{ isset($adsPdf->image_bw) ? asset($adsPdf->image_bw) : (isset($adsPdf->image_color) ? asset($adsPdf->image_color) : asset('admin/assets/images/default_image.jpg'))  }}" /></a></div>
            <div class="center mto mbo"><a href="/{{$adsPdf->slug}}" class="button btn-purple">@lang('app.download_now')</a></div>
        </div>
    </div>
    @endif
{{--    <div class="content-box sboptin-holder">--}}
{{--        <div class="sb-content">--}}
{{--            <span class="free">free</span>--}}
{{--            <h3>Exclusive Worksheets</h3>--}}
{{--            <div class="center">--}}
{{--                <div class="center"><span class="large">Get access to exclusive worksheets and our newsletter.</span><br/>Join now for free!</div>--}}
{{--            </div>--}}
{{--            <div class="xm-sm-loading" id="optloading1139">&nbsp;</div>--}}
{{--            <form class="opt-in-form" id="leadBoxOptIn-1139">--}}
{{--                <input id="t" name="t" type="hidden" value="19F3D09A-D4BE-D992-B8FA14ABA14FDB79" /><input id="p" name="p" type="hidden" value="/writing/letters/letter-x-tracing-printable-worksheet-color" /><input id="confirm_path" name="confirm_path" type="hidden" value="join" />--}}
{{--                <div id="optinfields1139">--}}
{{--                    <div class="row-e"><input class="required" id="your_name" name="your_name" type="text" /><input class="required-email" id="your_email" name="your_email" type="email" /></div>--}}
{{--                    <input class="full-width" id="lead_first_name" name="lead_first_name" placeholder="Your Name" type="text" autocomplete="off" vrequired="true" />--}}
{{--                    <input class="full-width" id="email" name="email" placeholder="Your Email" type="email" autocomplete="off" vrequired="true" />--}}
{{--                    <div class="optin-req" id="req1139"></div>--}}
{{--                    <button class="full-width" id="submit" name="submit" type="submit">Get Worksheets</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

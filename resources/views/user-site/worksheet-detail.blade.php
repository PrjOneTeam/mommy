@inject('worksheetHelper', 'App\Helpers\Worksheet')
@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <div class="container">
            <div class="content-left">
                <div class="content-holder">
                    <div class="content-box thank-you postdl-holder" id="fb-page-lk">
                        <div class="box-body">
                            <div class="postdl-wrap">
                                <strong class="like-title">If you liked what you downloaded,<br/>click the "Like" button to get exclusive worksheets & news on Facebook.</strong>
                                <div class="facebook-holder">
                                    <iframe src="//www.facebook.com/plugins/like.php?locale=en_US&href=https%3A%2F%2Fwww.facebook.com%2FMyTeachingStation&amp;width=82&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border: none; overflow: hidden; width: 100px;height: 21px;" allowtransparency="true"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="post-detail" class="content-box box-alt">
                        <div class="box-body">
                            <article class="single-post">
                                <div class="post-header">
                                    <h1>{{ $worksheet->name }}</h1>
                                </div>
                                <div class="post-worksheet-left">
                                    @if($worksheet->image_bw)
                                        <div class="photo-wrap" id="file-bw">
                                            <ul class="gallery">
                                                <li>
                                                <span class="pibfi_pinterest">
                                                    <img src="{{ $worksheet->image_bw }}"
                                                         alt="{{ $worksheet->name }}" style="max-width:300px;">
                                                </span>
                                                </li>
                                            </ul>
                                            @if($worksheet->files_color)
                                                <div class="tb">
                                                    <span class="wkopt color">{{__("Available in")}}
                                                        <button onclick="toggleColor(this)" style="text-decoration:underline;">{{__("color")}}</button>
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                                    @endif

                                    @if($worksheet->image_color)
                                        <div class="photo-wrap" id="file-color">
                                            <ul class="gallery">
                                                <li>
                                            <span class="pibfi_pinterest">
                                                <img src="{{ $worksheet->image_color }}"
                                                     alt="{{ $worksheet->name }}" style="max-width:300px;">
                                            </span>
                                                </li>
                                            </ul>
                                            @if($worksheet->files_bw)
                                                <div class="tb">
                                                    <span class="wkopt color">{{__("Available in")}}
                                                        <button style="text-decoration:underline;">{{__("black and white")}}</button>
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                    @if(!$worksheet->image_bw && !$worksheet->image_color)
                                            <div class="photo-wrap" id="file-color">
                                                <ul class="gallery">
                                                    <li>
                                                        <span class="pibfi_pinterest">
                                                            <img src="{{ asset(\App\Enums\Image::DEFAULT_IMAGE) }}"
                                                                 alt="{{ $worksheet->name }}" style="max-width:300px;">
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                    @endif
                                    @include('user-site.worksheet-detail.file-info')
                                </div>
                                <div class="post-worksheet-right">
                                    <ul class="share share-head">
                                        <li class="save"> <a data-id="8856" class="xmTip save-post" data-tooltip="Save to Favorites"><span class="icon-plus"></span></a></li>
                                        <li class="like"> <a data-id="8856" class="xmTip like-post" data-tooltip="I Like"><span class="icon-heart"></span></a></li>
                                        <li class="email"> <a href="javascript:void(0);" onclick="openSimpleModal('emailBoxPopup');" class="xmTip" data-tooltip="Email Page"><span class="icon-email"></span></a></li>
                                        <li class="fb"> <a href="https://www.facebook.com/dialog/share?app_id=709973005764664&amp;display=popup&amp;href=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fwriting%2Fletters%2Fletter%2Dx%2Dtracing%2Dprintable%2Dworksheet%2Dcolor&amp;redirect_uri=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fwriting%2Fletters%2Fletter%2Dx%2Dtracing%2Dprintable%2Dworksheet%2Dcolor" class="xmTip" data-tooltip="Share on Facebook" target="_blank"><span class="icon-facebook"></span></a></li>
                                        <li class="tw"> <a href="https://twitter.com/share?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fwriting%2Fletters%2Fletter%2Dx%2Dtracing%2Dprintable%2Dworksheet%2Dcolor&amp;text=Letter%20X%20Tracing%20Printable%20Worksheet%20%28Color%29. @MyTeaching" class="xmTip" data-tooltip="Share on Twitter" target="_blank"><span class="icon-twitter"></span></a></li>
                                        <li class="pin"> <a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fwriting%2Fletters%2Fletter%2Dx%2Dtracing%2Dprintable%2Dworksheet%2Dcolor&amp;media=https://www.myteachingstation.com%2Fvault%2F2599%2Fweb%2Farticles%2Fwriting%2Fletters%2FLetter%2DX%2DTracing%2DPrintable%2DWorksheet%2DColor%2Ejpg&amp;description=Give%20your%20students%20in%20kindergarten%20plenty%20of%20writing%20practice%20with%20the%20%3Cem%3ELetter%20X%20Tracing%20Printable%20Worksheet%20in%20Color%3C%2Fem%3E%2E%20%20%20%20In%20this%20activity%2C%20the%20student%20practices%20uppercase%20and%20lowercase%20letter%20formation%20with%20the%20guidance%20of%20the%20dashed%20lines%2E #MyTeachingStation" class="xmTip" data-tooltip="Share on Pinterest" target="_blank"><span class="icon-pinterest"></span></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    <div class="section-body">
                                        <ul class="wkst-detail">
                                            <li>
                                                <span>@lang('app.grade')</span>
                                                <span>
                                                    <a href="/worksheets/{{$worksheet->grade}}">{{ucfirst($worksheet->grade)}}</a>
                                                </span>
                                            </li>
                                            @if($worksheet->topic)
                                                <li>
                                                    <span>{{__("Topics")}}</span>
                                                    <span>
                                                        @foreach($worksheet->topic as $topic)
                                                            <span style="margin-right: 5px"><a href="/worksheets/{{$topic}}">{{ucfirst($topic)}}</a></span>
                                                        @endforeach
                                                        <span></span>
                                                    </span>
                                                </li>
                                            @endif
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="section-body">
                                        <div class="wkst-description">
                                            {{ $worksheet->description }}
                                        </div>
                                    </div>
                                    @include('user-site.worksheet-detail.download-section')
                                </div>
                                <div class="clearfix"></div>
                            </article>
                            <ul class="share share-foot">
                                <li class="save"> <a data-id="8856" class="save-post" title="Save to Favorites"><span class="icon-plus ics"></span><span class="txt">Save</span></a></li>
                                <li class="like"> <a data-id="8856" class="like-post" title="I Like"><span class="icon-heart ics"></span><span class="txt">Like</span></a></li>
                                <li class="fb"> <a href="https://www.facebook.com/dialog/share?app_id=709973005764664&amp;display=popup&amp;href=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fwriting%2Fletters%2Fletter%2Dx%2Dtracing%2Dprintable%2Dworksheet%2Dcolor&amp;redirect_uri=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fwriting%2Fletters%2Fletter%2Dx%2Dtracing%2Dprintable%2Dworksheet%2Dcolor" target="_blank"><span class="icon-facebook ics"></span><span class="txt">Share</span></a></li>
                                <li class="tw"> <a href="https://twitter.com/share?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fwriting%2Fletters%2Fletter%2Dx%2Dtracing%2Dprintable%2Dworksheet%2Dcolor&amp;text=Letter%20X%20Tracing%20Printable%20Worksheet%20%28Color%29. @MyTeaching" target="_blank"><span class="icon-twitter ics"></span><span class="txt">Tweet</span></a></li>
                                <li class="pin"> <a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fwriting%2Fletters%2Fletter%2Dx%2Dtracing%2Dprintable%2Dworksheet%2Dcolor&amp;media=https://www.myteachingstation.com%2Fvault%2F2599%2Fweb%2Farticles%2Fwriting%2Fletters%2FLetter%2DX%2DTracing%2DPrintable%2DWorksheet%2DColor%2Ejpg&amp;description=Give%20your%20students%20in%20kindergarten%20plenty%20of%20writing%20practice%20with%20the%20%3Cem%3ELetter%20X%20Tracing%20Printable%20Worksheet%20in%20Color%3C%2Fem%3E%2E%20%20%20%20In%20this%20activity%2C%20the%20student%20practices%20uppercase%20and%20lowercase%20letter%20formation%20with%20the%20guidance%20of%20the%20dashed%20lines%2E #MyTeachingStation" target="_blank"><span class="icon-pinterest ics"></span><span class="txt">Pin</span></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @include('user-site.worksheet-detail.you-may-also-like')
                    @if($worksheet instanceof \App\Models\Pdf)
                        @include('user-site.worksheet-detail.comments')
                    @else
                        @include('user-site.worksheet-detail.review')
                    @endif
                </div>
            </div>
            @include('user-site.worksheet-detail.content-right')
        </div>
        <div class="clearfix"></div>
        <div class="section-signup">
            <div class="container">
                <h2>Exclusive Worksheets</h2>
                <div class="descr">Enter your email below to sign up and download exclusive worksheets for free!</div>
                <div class="xm-sm-loading optinfoot" id="optloading1137"></div>
                <form class="opt-in-form" id="leadBoxOptIn-1137">
                    <input id="t" name="t" type="hidden" value="A66D2FAA-D4BE-D992-B8FAE05F81E4C851" /><input id="p" name="p" type="hidden" value="/writing/letters/letter-x-tracing-printable-worksheet-color" /><input id="confirm_path" name="confirm_path" type="hidden" value="join" />
                    <div id="optinfields1137">
                        <div class="row-e"><input class="required" id="your_name" name="your_name" type="text" /><input class="required-email" id="your_email" name="your_email" type="email" /></div>
                        <input id="lead_first_name" name="lead_first_name" placeholder="Your Name" type="text" /><input id="email" name="email" placeholder="Your Email" type="email" autocomplete="off" /> <input id="submit" name="submit" type="submit" value="Get Worksheets" />
                        <div class="optin-req" id="req1137">&nbsp;</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        const toggleColor = (e) => {
            const fileColor = document.getElementById('file-color');
            const fileBw = document.getElementById('file-bw');
            if (e.innerText === 'color') {
                fileColor.style.display = 'block';
                fileBw.style.display = 'none';
                e.innerText = 'black and white';
            } else {
                fileColor.style.display = 'none';
                fileBw.style.display = 'block';
                e.innerText = 'color';
            }
        }
    </script>
@endsection

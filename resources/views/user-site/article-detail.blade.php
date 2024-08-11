@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <div class="container">
            <div class="content-left">
                <div class="content-holder">
                    <div class="content-box thank-you postdl-holder" id="fb-page-lk">
                        <div class="box-body">
                            <div class="postdl-wrap">
                                <strong class="like-title">If you liked what you downloaded,<br>click the "Like" button to get exclusive worksheets &amp; news on Facebook.</strong>
                                <div class="facebook-holder">
                                    <iframe src="//www.facebook.com/plugins/like.php?locale=en_US&amp;href=https%3A%2F%2Fwww.facebook.com%2FMyTeachingStation&amp;width=82&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border: none; overflow: hidden; width: 100px;height: 21px;" allowtransparency="true"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="post-detail" class="content-box box-alt">
                        <div class="box-body">
                            <article class="single-post">
                                <div class="post-header">
                                    <h1>{{ $article->title }}</h1>
                                    <ul class="post-metas">
{{--                                        <li>Articles &gt; Child Development &gt; Teaching &amp; Learning</li>--}}
{{--                                        <li class="right">--}}
{{--                                            <ul class="share share-head">--}}
{{--                                                <li class="like"> <a data-id="2508" class="xmTip like-post" data-tooltip="I Like"><span class="icon-heart"></span><span class="txt">Like</span></a></li>--}}
{{--                                                <li class="email"> <a href="javascript:void(0);" onclick="openSimpleModal('emailBoxPopup');"><span class="icon-email" title="Email this page"></span><span class="txt">Email</span></a></li>--}}
{{--                                                <li class="fb"> <a href="https://www.facebook.com/dialog/share?app_id=709973005764664&amp;display=popup&amp;href=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;redirect_uri=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun" target="_blank"><span class="icon-facebook"></span><span class="txt">Share</span></a></li>--}}
{{--                                                <li class="tw"> <a href="https://twitter.com/share?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;text=How%20to%20Make%20Lessons%20Enjoyable%20and%20Fun. @MyTeaching" target="_blank"><span class="icon-twitter"></span><span class="txt">Tweet</span></a></li>--}}
{{--                                                <li class="pin"> <a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;media=https://www.myteachingstation.com%2Fvault%2F2599%2Fweb%2Fimages%2FArticles%2FEasy%2DSimple%2DSteps%2Dto%2DMake%2DTeaching%2Dand%2DLearning%2DFun%2Ejpg&amp;description=Creating%20an%20enjoyable%20learning%20environment%20in%20your%20home%20or%20classroom%20promotes%20higher%20levels%20of%20engagement%2C%20focus%2C%20and%20retention%20allowing%20for%20greater%20individual%20progress%20along%20side%20the%20development%20of%20a%20meaningful%20child%2Dteacher%20relationship%2E%20%20Set%20your%20child%20up%20to%20succeed%20and%20thrive%20with%20the%20following%20tips%2E #MyTeachingStation" target="_blank"><span class="icon-pinterest"></span><span class="txt">Pin</span></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="post-entry">
                                    <div class="photo-vertical-right pinterest-image"><img style="display: block; width: 366px; height: 541px;" src="{{$article->pictures ? asset($article->pictures) : asset(\App\Enums\Image::DEFAULT_IMAGE) }}"></div>
                                    {!! $article->content !!}
                                </div>
{{--                                <ul class="share share-foot">--}}
{{--                                    <li class="like"> <a data-id="2508" class="like-post" title="I Like"><span class="icon-heart ics"></span><span class="txt">Like</span></a></li>--}}
{{--                                    <li class="fb"> <a href="https://www.facebook.com/dialog/share?app_id=709973005764664&amp;display=popup&amp;href=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;redirect_uri=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun" target="_blank"><span class="icon-facebook ics"></span><span class="txt">Share</span></a></li>--}}
{{--                                    <li class="tw"> <a href="https://twitter.com/share?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;text=How%20to%20Make%20Lessons%20Enjoyable%20and%20Fun. @MyTeaching" target="_blank"><span class="icon-twitter ics"></span><span class="txt">Tweet</span></a></li>--}}
{{--                                    <li class="pin"> <a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;media=https://www.myteachingstation.com%2Fvault%2F2599%2Fweb%2Fimages%2FArticles%2FEasy%2DSimple%2DSteps%2Dto%2DMake%2DTeaching%2Dand%2DLearning%2DFun%2Ejpg&amp;description=Creating%20an%20enjoyable%20learning%20environment%20in%20your%20home%20or%20classroom%20promotes%20higher%20levels%20of%20engagement%2C%20focus%2C%20and%20retention%20allowing%20for%20greater%20individual%20progress%20along%20side%20the%20development%20of%20a%20meaningful%20child%2Dteacher%20relationship%2E%20%20Set%20your%20child%20up%20to%20succeed%20and%20thrive%20with%20the%20following%20tips%2E #MyTeachingStation" target="_blank"><span class="icon-pinterest ics"></span><span class="txt">Pin</span></a></li>--}}
{{--                                </ul>--}}
                                <div class="clearfix"></div>
                            </article></div>
                    </div>
                    <div class="content-box">
                        <div class="box-body">
                            <h2>Related Articles</h2>
                            <div class="related-post">
                                <ul>
                                    @foreach($related as $index => $eachArticle)
                                        <li><a href="{{'/article/' .  $eachArticle->id . '/details'}}" title="{{ $eachArticle->title }}">
                                                <div class="bck"><img src="{{$eachArticle->pictures ? asset($eachArticle->pictures) : asset(\App\Enums\Image::DEFAULT_IMAGE) }}" width="100%"></div>
                                                <div class="caption">{{ $eachArticle->title }}</div></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('user-site.worksheet-detail.content-right')
        </div>
        <div id="emailBoxPopup" class="modal">
            <div class="modal-content" style="max-width: 500px">
                <span class="modal-close" data-id="emailBoxPopup">×</span>
                <div class="modal-wrap">
                    <div class="emailbox-form">
                        <form class="send-email" id="emailbox-sendForm"><input id="shared_url" name="shared_url" type="hidden" value="https://www.myteachingstation.com/how-to-make-lessons-enjoyable-and-fun">
                            <fieldset>
                                <h3>Email Page</h3>
                                <div class="row">
                                    <input class="full-width" type="email" name="sender_email" id="sender_email" placeholder="Your Email">
                                </div>
                                <div class="row">
                                    <input class="full-width" type="email" name="recipient_email" id="recipient_email" placeholder="Recipient Email">
                                </div>
                                <div class="row">
                                    <textarea class="full-width" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="row row-url">
                                    URL: https://www.myteachingstation.com/how-to-make-lessons-enjoyable-and-fun
                                </div>
                                <div class="row row-submit">
                                    <input type="submit" value="Send Email" id="submit" class="submit full-width" onclick="$('.emailbox-form').hide();">
                                </div>
                                <div id="req-alert">Please enter a valid email address.</div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="email-sent" style="text-align:center;">
                        <p>Thank you for sharing! Your email has been sent.</p>
                        <p>More sharing options:</p>
                        <ul class="share share-foot sharingmail">
                            <li class="fb"> <a href="https://www.facebook.com/dialog/share?app_id=709973005764664&amp;display=popup&amp;href=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;redirect_uri=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun" target="_blank"><span class="icon-facebook ics"></span><span class="txt">Share</span></a></li>
                            <li class="tw"> <a href="https://twitter.com/share?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;text=How%20to%20Make%20Lessons%20Enjoyable%20and%20Fun. @MyTeaching" target="_blank"><span class="icon-twitter ics"></span><span class="txt">Tweet</span></a></li>
                            <li class="pin"> <a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww%2Emyteachingstation%2Ecom%2Fhow%2Dto%2Dmake%2Dlessons%2Denjoyable%2Dand%2Dfun&amp;media=https://www.myteachingstation.com%2Fvault%2F2599%2Fweb%2Fimages%2FArticles%2FEasy%2DSimple%2DSteps%2Dto%2DMake%2DTeaching%2Dand%2DLearning%2DFun%2Ejpg&amp;description=Creating%20an%20enjoyable%20learning%20environment%20in%20your%20home%20or%20classroom%20promotes%20higher%20levels%20of%20engagement%2C%20focus%2C%20and%20retention%20allowing%20for%20greater%20individual%20progress%20along%20side%20the%20development%20of%20a%20meaningful%20child%2Dteacher%20relationship%2E%20%20Set%20your%20child%20up%20to%20succeed%20and%20thrive%20with%20the%20following%20tips%2E #MyTeachingStation" target="_blank"><span class="icon-pinterest ics"></span><span class="txt">Pin</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="section-signup">
            <div class="container">
                <h2>Exclusive Worksheets</h2>
                <div class="descr">Enter your email below to sign up and download exclusive worksheets for free!</div>
                <div class="xm-sm-loading optinfoot" id="optloading1137"></div>
                <form class="opt-in-form" id="leadBoxOptIn-1137"><input id="t" name="t" type="hidden" value="A66D2FAA-D4BE-D992-B8FAE05F81E4C851"><input id="p" name="p" type="hidden" value="/how-to-make-lessons-enjoyable-and-fun"><input id="confirm_path" name="confirm_path" type="hidden" value="join">
                    <div id="optinfields1137">
                        <div class="row-e"><input class="required" id="your_name" name="your_name" type="text"><input class="required-email" id="your_email" name="your_email" type="email"></div>
                        <input id="lead_first_name" name="lead_first_name" placeholder="Your Name" type="text"><input id="email" name="email" placeholder="Your Email" type="email" autocomplete="off"> <input id="submit" name="submit" type="submit" value="Get Worksheets">
                        <div class="optin-req" id="req1137">&nbsp;</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

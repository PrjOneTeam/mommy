<div id="footer">
    <footer class="pbl">
        <div class="container">
            <div class="footer-container">
                <div class="footer-column one">
                    <div class="footer-header">@lang('app.workbooks')</div>
                    <ul class="link-list">
                        <li><a href="/worksheets/writing">@lang('app.writing')</a></li>
                        <li><a href="/worksheets/maths">@lang('app.math')</a></li>
                        <li><a href="/worksheets/art_coloring">@lang('app.art_and_colors')</a></li>
                    </ul>
                </div>
                <div class="footer-column two">
                    <div class="footer-header">@lang('app.my_account')</div>
                    <ul>
                        <li><a href="/user/login">@lang('app.account_login')</a></li>
                        <li><a href="/my-account">@lang('app.my_profile')</a></li>
                        <li><a href="/my-purchases">@lang('app.my_purchase')</a></li>
                        <li><a href="/my-orders">@lang('app.my_order')</a></li>
                    </ul>
                </div>
                <div class="footer-column three">
                    <div class="footer-header">@lang('app.app_name')</div>
                    <ul>
                        <li><a href="{{ route('about') }}">@lang('app.about')</a></li>
                        <li><a href="{{ route('statement') }}">@lang('app.privacy_statement')</a></li>
                        <li><a href="{{ route('policy') }}">@lang('app.refund_policy')</a></li>
                    </ul>
                </div>
                <div class="footer-column four">
                    <div class="footer-header">@lang('app.terms_and_conditions')</div>
                    <ul>
                        <li><a href="{{ route('terms') }}">@lang('app.terms_and_conditions')</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="footer-logo-wrapper">
                <a href="/" id="footer-logo">@lang('app.my_teaching_station')</a>
                @lang('app.small_description')
                <div class="block mto">
{{--                    <div class="social">--}}
{{--                        <a class="social-icons" id="social-icons" href="#" target="_blank"><i class="icon-pinterest"></i></a>--}}
{{--                        <a class="social-icons" id="social-icons" href="#" target="_blank"><i class="icon-facebook"></i></a>--}}
{{--                        <a class="social-icons" id="social-icons" href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>--}}
{{--                        <a class="social-icons" id="social-icons" href="#" target="_blank"><i class="icon-instagram"></i></a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="footer-stay-in-touch">
                <div class="block mto30"> &nbsp;</div>
                <div class="copyright mto">
                    <p>©2024 Mommy Me Station. All Rights Reserved.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>
</div>

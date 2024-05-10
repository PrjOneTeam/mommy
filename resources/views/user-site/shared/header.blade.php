<div id="header">
    <header>
        <div id="top-bar">
            <div class="container">
                <div class="top-navigation">
                    <ul class="top-row">
                        @if (Auth::check())
                            <li><a href="/my-account" class="header-login">@lang('app.welcome'), {{ Auth::user()->public_name }}</a></li>
                            <li><a href="/user/logout" class="header-login">@lang('app.logout')</a></li>
                        @else
                            <li class="first">
                                <div class="top-bar-join">
                                    <div class="text"><span>@lang('app.preschool_kindergarten_worksheets')</span></div>
                                    <div class="join"> <a href="/user/register">@lang('app.join_for_free')</a></div>
                                </div>
                            </li>
                            <li><a href="/user/login" class="header-login">@lang('app.login')</a></li>
                        @endif
                        <li class="first">
                            <div class="top-bar-cart">
                                <a href="/cart">
                                    <span class="txt">@lang('app.cart')</span> <span class="cnt">{{ $cart?->items->count() ?? 0 }}</span>
                                </a>
                            </div>
                        </li>
                            <li>
                                <select onchange="changeLanguage(this)">
                                    <option value="{{ route('setLocale', 'en') }}" @if((isset(session()->all()['locale']) ? session()->all()['locale'] : 'en') == 'en') selected @endif>English</option>
                                    <option value="{{ route('setLocale', 'vi') }}" @if((isset(session()->all()['locale']) ? session()->all()['locale'] : 'en') == 'vi') selected @endif>Tiếng Việt</option>
                                </select>

                                <script>
                                    function changeLanguage(select) {
                                        var url = select.options[select.selectedIndex].value;
                                        window.location.href = url;
                                    }
                                </script>
                            </li>
{{--                            <li><a style="color: white" href="{{ route('setLocale', 'en') }}">English</a></li>--}}
{{--                            <li><a style="color: white"  href="{{ route('setLocale', 'vi') }}">Tiếng Việt</a></li>--}}
                        <li>
                            <div class="social">
                                <a class="social-icons" id="social-icons" href="#" target="_blank"><i class="icon-pinterest"></i></a>
                                <a class="social-icons" id="social-icons" href="#" target="_blank"><i class="icon-facebook"></i></a>
                                <a class="social-icons" id="social-icons" href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                <a class="social-icons" id="social-icons" href="#" target="_blank"><i class="icon-instagram"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <a href="/" title="@lang('app.free_preschool_and_kindergarten_worksheets')">@lang('app.my_teaching_station')</a>
            <div class="nav-container">
                <nav>
                    <nav id="nav-main">
                        <ul>
                            <li><a href="/worksheets/writing">@lang('app.writing')</a></li>
                            <li><a href="/worksheets/maths">@lang('app.math')</a></li>
                            <li><a href="/worksheets/art_coloring">@lang('app.art_and_colors')</a></li>
                            <li><a href="/article" style="color:#079eed">@lang('app.articles')</a></li>
                            <li>
                                <div class="divleft"><a href="/worksheets">@lang('app.workbooks')</a></div>
                            </li>
                        </ul>
                    </nav>
                    <div id="nav-trigger">
                        <span>Menu</span>
                    </div>
                    <nav id="nav-mobile">
                        <ul>
                            <li><a href="/worksheets/writing">@lang('app.writing')</a></li>
                            <li><a href="/worksheets/maths">@lang('app.math')</a></li>
                            <li><a href="/worksheets/art_coloring">@lang('app.art_and_colors')</a></li>
                            <li><a href="/children-educational-articles" style="color:#079eed">@lang('app.articles')</a></li>
                            <li>
                                <div class="divleft"><a href="/preschool-kindergarten-workbooks">@lang('app.workbooks')</a></div>
                            </li>
                        </ul>
                    </nav>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
</div>

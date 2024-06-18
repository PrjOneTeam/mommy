@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <div class="container"><div class="content-holder">
                <script type="text/javascript">
                    checkBeforeLeaving = false;
                </script>
                <style>
                    .auth-container {background-color:#fff; margin: 0 auto; max-width: 420px;border: 1px solid #dadada}
                    .auth-block {max-width: 320px;padding-bottom:10px;}
                    .signup span.normal {font-size:14px;max-width:250px;margin:0 auto}
                    .pos-cell {padding: 0 10px 5px 0;}
                    .rgt {padding-right:0}
                    .signup span.subheading  {font-size:14px;margin-bottom:5px;}
                    .invalidFieldHeader {text-align:left;font-size:13px;}
                    .auth-foot {background-color:#f1f1f1; border-radius:4px;padding: 7px 15px;}
                    h1.hpage2 {padding-top:20px;}
                </style>
                <div>&nbsp;</div>
                <div class="auth-container">
                    <div class="auth-block">
                        <h1 class="hpage2">@lang('app.login_title')</h1>
                        <form onsubmit="return frmValidCheck(this);" name="SignIn" persist="false" style="margin-bottom:5px;" target="_self" id="SignIn" method="post" action="/user/login">
                            <span class="astrix">*</span>E-mail Address
                            <div><input maxlength="50" id="email" vtype="text" vlabel="Email Address" vrequired="true" class="clInput" style="width:97%;" type="text" name="email"> </div>
                            <span class="astrix">*</span>Password
                            <div><input maxlength="30" id="password" vtype="password" vlabel="Password" vrequired="true" class="clInput" style="width:97%" type="password" name="password"> </div>
                            <div class="mbo"><input type="checkbox" name="remember_me" id="remember_me_1" value="NEVER" class="clRadioCheck ">@lang('app.remember_me')</div>
                            <div id="ValidationMessagesSignIn" class="XMValidationMessage mbo"></div>
                            <input id="taskbtn" vtype="submit" class="btn btn-primary" type="submit" value="@lang('app.login')" style="width:100%">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                        <p class="center semi-small">@lang('app.forgot_pw')<a href="/user/forgot">@lang('app.reset_pw')</a>.</p>
                        <div class="auth-foot center mbo">
                            <strong>@lang('app.not_member')</strong> <a href="/user/register">@lang('app.join_free')</a>.
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div></div>
    </div>
@endsection

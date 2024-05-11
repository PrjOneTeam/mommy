<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>CMS | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/admin/assets/favicon.png">
    <!-- Bootstrap Css -->
    <link href="/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body data-sidebar="dark">
<div id="layout-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            @if(Session::has('loginMsgSuccess'))
                <div style="margin:0 auto;width:380px;text-align:center;padding-bottom:20px;">
                    <strong class="text-success">{{ Session::get('loginMsgSuccess') }}</strong>
                </div>
            @endif
            @if(Session::has('loginMsgError'))
                <div style="margin:0 auto;width:380px;text-align:center;padding-bottom:20px;">
                    <strong class="text-danger">{{ Session::get('loginMsgError') }}</strong>
                </div>
            @endif
            <div class="card overflow-hidden" style="margin:0 auto;width:380px;">
                <div class="card-body">
                    <div class="p-2">
                        <div class="text-center">
{{--                            <img src="{{ asset('logo.svg') }}">--}}
                                <strong>Mommy Login</strong>
                        </div>
                        <hr>
                        <form class="form-horizontal" method="post">
                            @csrf
                             @if(isset($errors))
                            <div class="{{ $errors->has('account') ? 'form-group has-danger' : '' }}">
                                @if ($errors->has('account'))
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
                                @endif
                            </div>
                             @endif
                            <div class="form-group">
                                <label for="userId">Tài khoản</label>
                                <input type="text" name="userId" class="form-control" value="{{ old('userId', '') }}" id="userId">
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

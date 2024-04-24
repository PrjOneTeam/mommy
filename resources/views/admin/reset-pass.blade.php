<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin | Change password</title>

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
                            <img src="{{ asset('temas/logo_black.svg') }}">
                        </div>
                        <hr>
                        <form class="form-horizontal" method="post" action="{{ route('admin.password-token', $_GET['token']) }}">
                            @csrf
                            @foreach ($errors->all() as $message)
                            <div class="form-group has-danger">

                            </div>
                            @endforeach
                            <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                                <label for="password">Mật khẩu mới</label>
                                <input type="password" name="password" class="form-control" id="password">
                                @error('password')
                                <span class="invalid-feedback" style="display:block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group {{ $errors->has('password_confirmation') ? 'has-danger' : '' }}">
                                <label for="password_confirmation">Nhập lại mật khẩu mới</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                @error('password_confirmation')
                                <span class="invalid-feedback" style="display:block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Gửi</button>
                            </div>
                            <div class="mt-4 text-center text-muted">
                                <script>document.write(new Date().getFullYear())</script> © vnolabs.
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name='robots' content='@yield('robots', "noodp,index,follow")'/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic|Satisfy|Handlee:400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('lib/com/fontawesome/6.x/css/all.min.css?ver=20230815-A') }}" />
    <link rel="stylesheet" href="{{ asset('lib/theme/mts/css/all.min.css?v=20240331') }}" type="text/css" />
    @stack('css')

    <script type="text/javascript" src="{{ asset('lib/jquery/jquery-3.5.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/theme/mts/js/jquery.main.min.js?v=20230129') }}"></script>
</head>
<body>
    @include('user-site.shared.header')
    <div id="content-layout">
        @yield('content-layout')
    </div>
    @include('user-site.shared.footer')
    @stack('script')
</body>
</html>

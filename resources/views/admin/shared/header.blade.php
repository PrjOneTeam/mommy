
<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="/coreui-icons/sprites/free.svg#cil-menu"></use>
        </svg>
    </button>
    <a class="c-header-brand d-lg-none" href="{{ route('admin.dashboard') }}">
        <img src="{{ asset('logo.png') }}" height="28" alt="Logo">
    </a>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="/coreui-icons/sprites/free.svg#cil-menu"></use>
        </svg>
    </button>
    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3">
            <div class="btn-group">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Thêm mới
                </button>
                <div class="dropdown-menu" style="margin: 0px;">
                    <a class="dropdown-item" href="{{ route('admin.workbook.create') }}">Workbook</a>
                    <a class="dropdown-item" href="{{ route('admin.pdf.create') }}">PDF</a>
                    <a class="dropdown-item" href="{{ route('admin.article.create') }}">Bài viết</a>
                </div>
            </div>
        </li>
{{--        <li class="c-header-nav-item px-3">--}}
{{--            <a class="c-header-nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>--}}
{{--        </li>--}}
{{--        @if($isAdmin)--}}
{{--        <li class="c-header-nav-item px-3">--}}
{{--            <a class="c-header-nav-link" href="{{ route('admin.setting.index') }}">Settings</a>--}}
{{--        </li>--}}
{{--        @endif--}}
{{--        <li class="c-header-nav-item px-3">--}}
{{--            <a class="c-header-nav-link" href="javascript:FileManage.showPopup()">File Manager</a>--}}
{{--        </li>--}}
{{--        <li class="c-header-nav-item px-3">--}}
{{--            <a class="c-header-nav-link btn btn-danger" style="color:#fff" href="/clear-cache">Xóa cache</a>--}}
{{--        </li>--}}
    </ul>
    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><i class="c-sidebar-nav-icon c-icon cil-account-logout"></i></div>
            </a>
           <div class="dropdown-menu dropdown-menu-right pt-0" style="padding-bottom: 0">
            <a class="dropdown-item" href="{{ route('admin.logout') }}">
                Đăng xuất
            </a>
           </div>
        </li>
    </ul>
</header>


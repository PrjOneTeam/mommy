<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="/coreui-icons/sprites/free.svg#cil-menu"></use>
        </svg>
    </button>
    <a class="c-header-brand d-lg-none" href="{{ route('admin.dashboard') }}">
        <img src="{{ asset('temas/Temas-LogoDesign.png') }}" height="28" alt="Temas Logo">
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
                    {{ $lang['create'] }}
                </button>
                <div class="dropdown-menu" style="margin: 0px;">
                    <a class="dropdown-item" href="{{ route('admin.product.create') }}">{{ $lang['products'] }}</a>
                    <a class="dropdown-item" href="{{ route('admin.product-group.create') }}">{{ $lang['product_group'] }}</a>
                    <a class="dropdown-item" href="{{ route('admin.product-type.create') }}">{{ $lang['product_type'] }}</a>
                    <a class="dropdown-item" href="{{ route('admin.manufacturer.create') }}">{{ $lang['manufacturer'] }}</a>
                </div>
            </div>
        </li>
        <li class="c-header-nav-item px-3">
            <a class="c-header-nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        @if($isAdmin)
        <li class="c-header-nav-item px-3">
            <a class="c-header-nav-link" href="{{ route('admin.setting.index') }}">Settings</a>
        </li>
        @endif
        <li class="c-header-nav-item px-3">
            <a class="c-header-nav-link" href="javascript:FileManage.showPopup()">File Manager</a>
        </li>
        <li class="c-header-nav-item px-3">
            <a class="c-header-nav-link btn btn-danger" style="color:#fff" href="/clear-cache">Xóa cache</a>
        </li>
    </ul>
    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item dropdown">
            <a href="#" class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                @if($flag == 'en')
                    <i class="c-icon c-icon-2xl cif-gb mr-2"></i>
                @else
                    <i class="c-icon c-icon-2xl cif-vn"></i>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <a class="dropdown-item" href="{{ $flag == 'vn' ? 'javascript:void(0)' : route('admin.lang', ['flg' => 'vn']) }}">
                    <i class="c-icon c-icon-2xl cif-vn mr-2"></i>
                    Vietnamese
                </a>
                <a class="dropdown-item" href="{{ $flag == 'en' ? 'javascript:void(0)' : route('admin.lang', ['flg' => 'en']) }}">
                    <i class="c-icon c-icon-2xl cif-gb mr-2"></i>
                    English
                </a>
            </div>
        </li>
        <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link" href="#">
                <svg class="c-icon">
                    <use xlink:href="/coreui-icons/sprites/free.svg#cil-bell"></use>
                </svg>
            </a>
        </li>
        <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link" href="#">
                <svg class="c-icon">
                    <use xlink:href="/coreui-icons/sprites/free.svg#cil-list-rich"></use>
                </svg>
            </a>
        </li>
        <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link" href="#">
                <svg class="c-icon">
                    <use xlink:href="/coreui-icons/sprites/free.svg#cil-envelope-open"></use>
                </svg>
            </a>
        </li>
        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="/admin/assets/img/avatars/6.jpg" alt="user@email.com"></div>
            </a>
           <div class="dropdown-menu dropdown-menu-right pt-0" style="padding-bottom: 0">
            <a class="dropdown-item" href="{{ route('admin.profile.edit', auth()->guard('admin')->user()->id) }}">
                Thông tin tài khoản
            </a>
            <a class="dropdown-item" href="{{ route('admin.logout') }}">
                Đăng xuất
            </a>
           </div>
        </li>
    </ul>
</header>


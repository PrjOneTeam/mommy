<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand">
        <style>
            @media(min-width: 768px) {
                .span-c-sidebar-brand-minimized {
                    width: 40px;
                    overflow: hidden;
                    display: block;
                    padding-left: 5px;
                }
            }
        </style>
        <img class="c-sidebar-brand-full" src="{{ asset('temas/logo.svg') }}" width="118" height="46" alt="Temas Logo">
        <span class="span-c-sidebar-brand-minimized">
            <img class="c-sidebar-brand-minimized" src="{{ asset('temas/logo.svg') }}" width="118" height="46" alt="Temas Logo">
        </span>
    </div>
    <ul class="c-sidebar-nav">
        <!---------------------------------
        |   Quản lý khách hàng
        ---------------------------------->
        @if($isAdmin)
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.customer.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-people"></i>
                {{ $lang['customers'] }}
            </a>
        </li>
        @endif
        <!---------------------------------
        |   Quản lý sản phẩm
        ---------------------------------->
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle">
                <i class="c-sidebar-nav-icon c-icon cil-lan"></i>
                {{ $lang['product_management'] }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('admin-v2.product.index') }}">
                        {{ $lang['products'] }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('admin-v2.product-group.index') }}">
                        {{ $lang['product_group'] }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('admin-v2.product-type.index') }}">
                        {{ $lang['product_type'] }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('admin-v2.manufacturer.index') }}">
                        {{ $lang['manufacturer'] }}
                    </a>
                </li>
            </ul>
        </li>
        <!---------------------------------
        |   Quản lý ứng dụng
        ---------------------------------->
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                {{ $lang['application']['management'] }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('admin-v2.application.index') }}">
                        Giải pháp
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('admin-v2.solution.index') }}">
                        Nhóm giải pháp
                    </a>
                </li>
            </ul>
        </li>
        <!---------------------------------
        |   Quản lý ngành công nghiệp
        ---------------------------------->
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.industry.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                {{ $lang['industry']['index'] }}
            </a>
        </li>
        <!---------------------------------
        |   Quản lý Post
        ---------------------------------->
        <li class="c-sidebar-nav-title">{{$lang['common']['posts']}}</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.topic.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Topic
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.post.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Posts
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.event.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Sự kiện
            </a>
        </li>
        <li class="c-sidebar-nav-title">Download</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.download.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Bài viết
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.category-download.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Danh mục
            </a>
        </li>
        <li class="c-sidebar-nav-title">Nguồn nhân lực</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.employee.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Nhân viên
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.department.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Phòng ban
            </a>
        </li>
        <li class="c-sidebar-nav-title">-----</li>
      	<li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.project.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Dự án
            </a>
        </li>
     	<li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.subscribe.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Đăng kí nhận thông tin
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.contact-request.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Yêu cầu liên hệ
            </a>
        </li>
        @if($isAdmin)
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin-v2.account.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-newspaper"></i>
                Quản trị viên
            </a>
        </li>
        @endif
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>

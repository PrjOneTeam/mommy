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
        <img class="c-sidebar-brand-full" src="{{ asset('/images/mommy-logo.svg') }}" width="118" height="46" alt="Logo">
        <span class="span-c-sidebar-brand-minimized">
            <img class="c-sidebar-brand-minimized" src="{{ asset('/images/mommy-logo.svg') }}" width="118" height="46" alt="Logo">
        </span>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.customer.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-people"></i>
                Quản lý thành viên
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.order.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-share-boxed"></i>
                Quản lý đơn hàng
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.workbook.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Quản lý workbook
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.pdf.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Quản lý PDFs
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.article.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Bài viết
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <p style="margin: 10px auto 0 5px; color: #999999">Khách hàng</p>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.comment.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Quản lý bình luận
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.review.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Quản lý đánh giá
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <p style="margin: 10px auto 0 5px; color: #999999">Thanh toán</p>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.payment') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Quản lý tài khoản ngân hàng
            </a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>

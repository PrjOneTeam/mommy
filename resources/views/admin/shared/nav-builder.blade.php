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
        <img class="c-sidebar-brand-full" src="{{ asset('logo.svg') }}" width="118" height="46" alt="Logo">
        <span class="span-c-sidebar-brand-minimized">
            <img class="c-sidebar-brand-minimized" src="{{ asset('logo.svg') }}" width="118" height="46" alt="Logo">
        </span>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.dashboard') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                {{ $lang['dashboard'] }}
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.customer.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-people"></i>
                {{ $lang['customers'] }}
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.order.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-share-boxed"></i>
                {{ $lang['orders'] }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.workbook.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                {{__("Workbooks")}}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.pdf.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                {{__("Pdfs")}}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.article.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                {{__("Articles")}}
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <p style="margin: 10px auto 0 5px; color: #999999">{{__("Customers")}}</p>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.comment.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                {{__("Comments")}}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.review.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                {{__("Reviews")}}
            </a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>

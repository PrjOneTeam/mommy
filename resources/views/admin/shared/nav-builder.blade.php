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
            <p style="margin: 10px auto 0 5px; color: #999999">Werkbooks</p>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('workbooks.lists') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Workbooks
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('workbooks.create') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Add Workbook
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <p style="margin: 10px auto 0 5px; color: #999999">PDF</p>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('pdfs.lists') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Pdfs
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('pdfs.create') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Add Pdf
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <p style="margin: 10px auto 0 5px; color: #999999">Articles</p>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('articles.lists') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Articles
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('articles.create') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Add Article
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <p style="margin: 10px auto 0 5px; color: #999999">Customers</p>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('comments.lists') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Comments
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('reviews.lists') }}">
                <i class="c-sidebar-nav-icon c-icon cil-album"></i>
                Reviews
            </a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>
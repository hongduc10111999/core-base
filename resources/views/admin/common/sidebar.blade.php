<nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
        <a href="{{ route('admin.index') }}">
            <img src="{{ asset('themes/page/assets/img/logo.png') }}" alt="logo" class="brand"
                data-src="{{ asset('themes/page/assets/img/logo.png') }}"
                data-src-retina="{{ asset('themes/page/assets/img/logo_2x.png') }}" width="78" height="22">
        </a>
    </div>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
            @foreach (array_reverse(config('menu')) as $menuItem)
                @php
                    $class = '';
                    $path = '#';
                    if ($menuItem['path']) {
                        $path = route($menuItem['path']);
                    }
                    if ($path == url()->current()) {
                        $class = 'active';
                    }
                @endphp
                <li class="{{ $class }}">
                    <a href="{{ $path }}" class="click_menu detailed">
                        <span class="title">{{ $menuItem['name'] ?? '' }}</span>
                        <span class="details">{{ $menuItem['details'] ?? '' }}</span>
                    </a>
                    <span class="icon-thumbnail"><i data-feather="{{ $menuItem['icon'] ?? '' }}"></i></span>

                </li>
            @endforeach
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</nav>

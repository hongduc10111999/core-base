<div class="container p-0">
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav m-auto">
                @foreach (config('menuprofile') as $menuItem)
                    @php
                        $class = '';
                        $path = '#';
                        $dropdown = '';
                        $toggle = '';
                        if ($menuItem['path']) {
                            $path = route($menuItem['path']);
                        }
                        if ($path == url()->current()) {
                            $class = 'active';
                            $open = 'open';
                        }
                        if (!empty($menuItem['submenu'])) {
                            $dropdown = 'dropdown';
                            $toggle = 'dropdown-toggle';
                        }
                    @endphp

                    <div class="nav-item {{ $class }} {{ $dropdown }}">
                        <a href="{{ $path }}" class="nav-link {{ $toggle }}"
                            data-toggle="{{ $dropdown }}">{{ $menuItem['name'] }}</a>
                        <div class="dropdown-menu">
                            @if (!empty($menuItem['submenu']))
                                @foreach ($menuItem['submenu'] as $item)
                                    @php
                                        $class = '';
                                        $path = '#';
                                        
                                        if ($item['path']) {
                                            $path = route($item['path']);
                                        }
                                        if ($path == url()->current()) {
                                            $class = 'acctive';
                                        }
                                    @endphp
                                    <a href="{{ $path }}" class="dropdown-item">{{ $item['name'] }}</a>
                                @endforeach
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </nav>
</div>

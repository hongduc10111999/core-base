<!DOCTYPE html>
<html lang="en">

<head>
    @section('css')
        @include('admin.common.head')
    @show
    @yield('cssnew')
    
</head>

<body class="fixed-header dashboard menu-pin">
    <aside>
        @include('admin.common.sidebar')
    </aside>
    <div class="page-container ">
        @include('admin.common.header')
        <main>
            <div class="content">
                @yield('content')
                @include('admin.common.footer')
            </div>
        </main>
        
    </div>
    @section('js')
        @include('admin.common.js')
    @show
    @yield('jsnew')
</body>

</html>

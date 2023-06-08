<!DOCTYPE html>
<html lang="en">
<head>
    @include('profile.common.head')
    @yield('cssnew')
</head>
<body>
    <div class="wrapper">
        @include('profile.common.sidebar')
        <div class="content">
            <!-- Navbar Start -->
            @include('profile.common.nav')
            <!-- Navbar End -->

            <!-- Carousel Start -->
            @yield('content')
            
            <!-- Blog List End -->


            <!-- Footer Start -->
            @include('profile.common.footer')
            <!-- Footer End -->
        </div>
    </div>
    @include('profile.common.backtotop')

    @include('profile.common.js')

    @yield('jsnew')
</body>
</html>
<!DOCTYPE html>
<html>
@include('layouts.head')
<body>
@include('layouts.navbar')

@include('layouts.sidebar')

    <div class="mobile-menu-overlay"></div>
    @yield('container')

    <!-- js -->
    @include('layouts\script')
</body>
</html>

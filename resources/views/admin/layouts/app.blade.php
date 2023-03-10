<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        @include('admin.layouts.partials.meta')

        <!-- Title Page-->
        <title>@yield('title') :: {{config('app.name')}}</title>
        
        <!-- Page head styles -->
        @include('admin.layouts.partials.style')

        @stack('css')
    </head>

    <body>
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            @include('admin.layouts.partials.mobile-header')
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            @include('admin.layouts.partials.sidebar')
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                @include('admin.layouts.partials.desktop-header')
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                @yield('content')
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

        <!-- Page head scripts -->
        @include('admin.layouts.partials.script')
        @stack('js')

        {!! Toastr::message() !!}
    </body>
</html>
<!-- end document-->

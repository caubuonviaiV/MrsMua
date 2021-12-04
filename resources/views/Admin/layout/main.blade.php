<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    @include('admin.layout.head')
</head>

<body>
    <div id="fb-root"></div>
    <div id="mytask-layout" class="theme-indigo">

        <!-- sidebar -->
        @include('admin.layout.slidebar')

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            @include('admin.layout.header')

            @include('admin.alert')


            {{-- nội dung đây --}}
            @yield('content')

        </div>

    </div>
    @include('admin.layout.footer')
    </div>
    <!-- /Sign In Modal -->
</body>

</html>

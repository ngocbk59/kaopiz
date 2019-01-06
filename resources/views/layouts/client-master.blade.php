<!doctype html>
<html class="no-js" lang="zxx">
 

<!-- Mirrored from demo.hasthemes.com/airi-v6/airi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 12:07:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>Airi - @yield('title','Store')</title>
    <base href="{{asset('/')}}">

    <!-- ************************* CSS Files ************************* -->
    @include('layouts.client-css')

</head>

<body>

    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper Start -->
    <div class="wrapper enable-header-transparent">
        <!-- Header Area Start -->
        @include('layouts.client-header', ['transparentMenu' => $transparentMenu ?? false])

        @yield('breadcrumb-area')

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            @yield('content')

        </div>
        <!-- Main Content Wrapper Start -->

        @include('layouts.client-footer')

    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    @include('layouts.client-js')
    @yield('pagejs')


</body>


<!-- Mirrored from demo.hasthemes.com/airi-v6/airi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 12:08:55 GMT -->
</html>
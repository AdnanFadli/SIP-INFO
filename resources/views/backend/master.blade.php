<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!--link-->
    @include('backend.partial.link')

</head>

<body>

    <!-- ======= Header ======= -->
    @include('backend.partial.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('backend.partial.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            @yield('content')
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('backend.partial.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('backend.partial.js')

</body>

</html>

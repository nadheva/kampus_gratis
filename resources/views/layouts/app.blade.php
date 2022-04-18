<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kampus Gratis</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css') }}">

    @yield('css')

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>


    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        @include('admin.partials.sidebar')

        <div class="page-content">

            @include('admin.partials.navbar')

            <!-- Page main content START -->
            @yield('content')
            <!-- Page main content END -->
        </div>

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js') }}"></script>

    <!-- Template Functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>

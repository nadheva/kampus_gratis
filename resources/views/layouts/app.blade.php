<!DOCTYPE html>
<html lang="en">
    @include('landingpage.partials.head')

<body>

<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->

    @include('landingpage.partials.navbar')
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
	{{ $slot }}
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
@include('landingpage.partials.footer')
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
@include('landingpage.partials.scripts')


</body>
</html>

<x-app-layout>
    <!-- =======================
Page Banner START -->
@include('landingpage.partials.banner-dashboard')
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

			<!-- Right sidebar START -->
			@include('landingpage.partials.sidebar-dashboard')
			<!-- Right sidebar END -->

			<!-- Main content START -->
			<div class="col-xl-9">
			<!-- Main content END -->
		</div>
	</div>	
</section>
<!-- =======================
Page content END -->

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>LinkedOn - Find Your Project Easily</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    @yield('style')
</head>

<body>
	<!-- navbar -->
    @include('components.bar')
    <!-- navbar end -->

    <!-- Pages Content-->
    @yield('content')
    <!-- Pages Content End-->

    <!-- Footer -->
	@include('components.footer')
    <!-- Footer End -->

    <!-- Bootstrap core JavaScript -->
    <div>
    	
    	<script src="vendor/jquery/jquery.slim.min.js"></script>
    	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    	<script>
    		AOS.init();
    	</script>
    	<script src="script/navbar-scroll.js"></script>
    </div>
    <!-- Bootstrap core JS end -->
  </body>
</html>

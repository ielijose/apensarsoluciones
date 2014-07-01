<!doctype html>


<html lang="es" class="no-js">
<head>
	<title>Apensar Soluciones</title>

	<meta charset="utf-8">
	<meta name="description" content="Apensar Soluciones">
	<meta name="keywords" content="Apensa,Soluciones,#apensar,#apensarsoluciones">
	<meta name="author" content="Eli José Carrasquero">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/magnific-popup.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" media="screen">
	
	<style>
	img.unveil {
		opacity: 0;
		transition: opacity .3s ease-in;
	} 
	</style>
</head>
<body>

	<!-- Container -->
	<div id="container" class="">
		<!-- Header
		================================================== -->
		@include('layouts.header')
		<!-- End Header -->

		<!-- content 
		================================================== -->
		<div id="content">

			@yield('content')

		</div>
		<!-- End content -->


		<!-- footer 
		================================================== -->
		@include('layouts.footer')
		<!-- End footer -->
	</div>
	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="/images/preloader.gif">
	</div>
	
	<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.migrate.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.imagesloaded.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/retina-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/plugins-scroll.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/waypoint.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>

	@yield('javascript')

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-52435807-1', 'auto');
	ga('send', 'pageview');

	</script>
	
</body>
</html>
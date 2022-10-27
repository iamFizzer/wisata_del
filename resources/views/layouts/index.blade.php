<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wantunen &mdash; Travel</title>

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('asset')}}/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('asset')}}/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{asset('asset')}}/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('asset')}}/css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('asset')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('asset')}}/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('asset')}}/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{asset('asset')}}/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('asset')}}/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	@include('layouts.navbar')
	@include('layouts.header')
	@include('content.V_destinasi')

	@include('content.V_protokol')
	@include('content.V_service')
	@include('content.V_support')
	@include('layouts.footer')
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('asset')}}/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('asset')}}/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{asset('asset')}}/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{asset('asset')}}/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="{{asset('asset')}}/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="{{asset('asset')}}/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="{{asset('asset')}}/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('asset')}}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('asset')}}/js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="{{asset('asset')}}/js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="{{asset('asset')}}/js/main.js"></script>

	</body>
</html>


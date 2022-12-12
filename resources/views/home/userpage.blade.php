<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags --> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>KOSTin</title>
		<link rel="stylesheet" href="{{asset('home/vendors/mdi/css/materialdesignicons.min.css')}}">
		<link rel="stylesheet" href="{{asset('home/vendors/owl.carousel/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('home/vendors/owl.carousel/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('home/vendors/aos/css/aos.css')}}">
		<link rel="stylesheet" href="{{asset('home/vendors/jquery-flipster/css/jquery.flipster.css')}}">
		<link rel="stylesheet" href="{{asset('home/css/style.css')}}">
		<link rel="shortcut icon" href="{{asset('home/images/home3.png')}}" />
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		@include('home.header')
		<div class="page-body-wrapper">
			@include('home.section1')
			@include('home.section2')
		</div>
		@include('home.footer')
		<script src="{{asset('home/vendors/base/vendor.bundle.base.js')}}"></script>
		<script src="{{asset('home/vendors/owl.carousel/js/owl.carousel.js')}}"></script>
		<script src="{{asset('home/vendors/aos/js/aos.js')}}"></script>
		<script src="{{asset('home/vendors/jquery-flipster/js/jquery.flipster.min.js')}}"></script>
		<script src="{{asset('home/js/template.js')}}"></script>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		@include('home.css')
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		@include('home.header')
		<div class="page-body-wrapper">
			@include('home.section1')
			@include('home.kost')
			@include('home.section2')
		</div>
		@include('home.footer')
		@include('home.script')
	</body>
</html>
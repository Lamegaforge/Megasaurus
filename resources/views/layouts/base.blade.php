<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('body')</title>
	<!-- css: theme -->
	<link rel="stylesheet" href="css/theme.min.css">
</head>
<body class="@yield('body')">
	<div class="site">
		@include('sections.header')
		<!-- end .site-header -->
		@yield('content')
		<!-- end .site-content -->
		@include('sections.footer')
		<!-- end .site-footer -->
	</div>
	<!-- end .site -->
	<!-- js: vendor -->
	<script src="js/vendor.js"></script>
	<script src="js/theme.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<!-- css: theme -->
	<link rel="stylesheet" href="/css/theme.css">
</head>
<body class="fixed-navbar page-lg">
	<div class="site">
		@include('layouts.header')
		<!-- end .site-header -->
        @yield('content')
		<!-- end .site-content -->
		@include('layouts.footer')
		<!-- end .site-footer -->
	</div>
	<!-- end .site -->
	<!-- js: vendor -->
	<script src="/js/vendor.js"></script>
	<script src="/js/theme.min.js"></script>
	<!-- js: plugins -->
	<script>
		$(function() {
			$('.form-control').keyup(function() {
				var search = $(this).val().toLowerCase();
				$.each($('.card-title'), function() {
					if ($(this).text().toLowerCase().indexOf(search) === -1) {
						$(this).parent().parent().parent().hide();
					} else {
						$(this).parent().parent().parent().show();
					}
				});
			});
		});
	</script>
	<!-- theme settings -->
</body>
</html>
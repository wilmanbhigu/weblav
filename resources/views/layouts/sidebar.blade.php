<!DOCTYPE html>
<html>
<head>
	@include('partials.head')
</head>
<body>
	<div id="main" class="row">
		<!--sidebar content -->
		<div id="sidebar" class="col-md-4">
			@include('partials.sidebar')
		</div>

		<!--main content -->
		<div id="content" class="col-md-8">
			@yield('content')
		</div>

		<footer class="row">
			@include('partials.footer')
		</footer>
	</div>
	
    <!-- jQuery Scripts -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>  
    <script type="text/javascript" src="/js/scripts.js"></script>
</body>
</html>
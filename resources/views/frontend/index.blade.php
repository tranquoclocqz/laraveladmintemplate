<!DOCTYPE html>
<html lang="vi">
<head>
	<title>{{$title}}</title>
	@include('frontend/layout/meta')
	@include('frontend/layout/style')
	{{$facebook}}
</head>
<body>
	<header id="header">
		@include('frontend/layout/header')
	</header><!-- /header -->
	<section id="content">
		@yield('content')
	</section>
	<footer id="footer">
		@include('frontend/layout/footer')
	</footer>
	@yield('script')
</body>
</html>
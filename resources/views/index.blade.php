<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="author" content="My">
    <meta name="description" content="">
    <base href="{{asset('')}}">
    <link rel="canonical" href="{{asset('')}}" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="{{asset('')}}">
    <script src="{{asset('/public/asset/js/jquery-1.12.4.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/less" href="{{asset('')}}/public/asset/css/style.less">
    @yield('css')
</head>
<body>
    @yield('content')
    @yield('script')
</body>
</html>


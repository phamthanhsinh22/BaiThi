<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	<div class="container">
		@include('header')
		@section('content')
		@show
		@include('footer')
	</div>
</body>
</html>
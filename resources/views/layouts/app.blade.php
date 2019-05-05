<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{config('app.name', 'DemoBlog')}}</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
	@include('includes.navbar')
	<div class="container">
		@include('includes.message')
		@yield('content')
	</div>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'article-ckeditor' );
	</script>
</body>

</html>

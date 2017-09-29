<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		@yield('content')
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>
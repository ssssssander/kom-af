<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page') - Kom Af</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
    </script>
</head>
<body>
<header>
	@if (Auth::guest())
		<a href="{{ route('login') }}">Login</a>
	@endif
	<nav>
		<img src="/img/A_logo_2925_PMS_NEG.png" alt="">
		<ul>
			<li><a href="">nieuws</a></li>
			<li><a href="">scholen</a></li>
			<li><a href="">vrije tijd</a></li>
			<li><a href="">omgeving</a></li>
			<li><a href="">eten & drinken</a></li>
			<li><a href="">testimonials</a></li>
		</ul>
	</nav>
	<img src="" alt="">
	<h1>@yield('page')</h1>
</header>
<main>
	@yield('content')
</main>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>

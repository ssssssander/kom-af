<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ str_replace('_', ' ', Route::currentRouteName()) }} | Kom Af</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
    </script>
</head>
<body>
<header class="{{ Route::currentRouteName() }}">
	@if (Auth::guest())
		<a href="{{ route('login') }}">Login</a>
	@endif
	<nav>
		<a href="{{ route('nieuws') }}"><img src="/img/A_logo_2925_PMS_NEG.png" alt=""></a>
		<ul>
			<li><a href="{{ route('nieuws') }}"{{ Route::currentRouteName()==="nieuws"||Route::currentRouteName()==="artikel"? ' class=active':'' }}>nieuws</a></li>
			<li><a href="{{ route('scholen') }}"{{ Route::currentRouteName()==="scholen"||Route::currentRouteName()==="opleidingen"||Route::currentRouteName()==="opleiding"? ' class=active':'' }}>scholen</a></li>
			<li><a href="{{ route('vrije_tijd') }}"{{ Route::currentRouteName()==="vrije_tijd"? ' class=active':'' }}>vrije tijd</a></li>
			<li><a href="{{ route('omgeving') }}"{{ Route::currentRouteName()==="omgeving"? ' class=active':'' }}>omgeving</a></li>
			<li><a href="{{ route('testimonials') }}"{{ Route::currentRouteName()==="testimonials"? ' class=active':'' }}>testimonials</a></li>
		</ul>
	</nav>
    <h1>{{ str_replace('_', ' ', Route::currentRouteName()) }}</h1>
</header>
<main class="{{ Route::currentRouteName() }}">
	@yield('content')
</main>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>

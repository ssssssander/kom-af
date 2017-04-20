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
			<li><a href="{{ route('nieuws') }}"{{ Route::currentRouteName()==="nieuws"||Route::currentRouteName()==="artikel"? ' class=active':'' }}><p>nieuws</p></a></li>
			<li><a href="{{ route('scholen') }}"{{ Route::currentRouteName()==="scholen"||Route::currentRouteName()==="opleidingen"||Route::currentRouteName()==="opleiding"? ' class=active':'' }}><p>scholen</p></a></li>
			<li><a href="{{ route('vrije_tijd') }}"{{ Route::currentRouteName()==="vrije_tijd"? ' class=active':'' }}><p>vrije tijd</p></a></li>
			<li><a href="{{ route('omgeving') }}"{{ Route::currentRouteName()==="omgeving"? ' class=active':'' }}><p>omgeving</p></a></li>
			<li><a href="{{ route('testimonials') }}"{{ Route::currentRouteName()==="testimonials"? ' class=active':'' }}><p>testimonials</p></a></li>
			<li><a href="{{ route('zoeken',['query'=>'']) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#0091D3" d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg></a></li>
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

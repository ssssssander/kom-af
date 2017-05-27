<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', ucfirst(str_replace('_', ' ', Route::currentRouteName()))) | Kom Af</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
		<a href="{{ route('algemeen') }}"><img src="{{ asset('img/logos/algemeen.svg') }}" alt="Antwerpen"></a>
		<ul>
			<li>
                <a href="{{ route('algemeen') }}" class="{{ Route::is('algemeen') ? 'active' : null }}">
                    <p>Algemeen</p>
                </a>
            </li>
			<li>
                <a href="{{ route('testimonials') }}" class="{{ Route::is('testimonial*') ? 'active' : null }}">
                    <p>Testimonials</p>
                </a>
            </li>
			<li>
                <a href="{{ route('scholen') }}" class="{{ Route::is('scho*') ? 'active' : null }}">
                    <p>Scholen</p>
                </a>
            </li>
			<li>
				<a href="{{ route('nieuws') }}" class="{{ (Route::is('nieuws') || Route::is('artikel')) ? 'active' : null }}">
					<p>Nieuws</p>
				</a>
			</li>
			<li>
                <a href="{{ route('studentengids') }}" class="{{ Route::is('studentengids') ? 'active' : null }}">
                    <p>Studentengids</p>
                </a>
            </li>
			<li>
                <form method="get" action="{{ route('zoeken') }}">
                    {{ csrf_field() }}
                    <input type="image" src="{{ asset('img/zoek.svg') }}">
                </form>
            </li>
		</ul>
	</nav>
	@yield('vid', $vid =  false)

    <img src="{{ asset('img/') }}/@yield('heroImage', 'hero_images/' . Route::currentRouteName() . '.jpeg')"
        alt="{{ Route::currentRouteName() }}">

    <h1>@yield('title', ucfirst(str_replace('_', ' ', Route::currentRouteName())))</h1>
</header>
<main class="{{ Route::currentRouteName() }}">
	@yield('content')
</main>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

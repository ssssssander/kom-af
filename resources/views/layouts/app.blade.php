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
	<nav>
		<a href="{{ route('algemeen') }}"><img src="{{ asset('img/logo.svg') }}" alt="Antwerpen"></a>
		<ul>
			<li>
                <a href="{{ route('algemeen') }}" {{ Route::is('algemeen') ? 'class=active' : null }}>
                    <p>Algemeen</p>
                </a>
            </li>
			<li>
                <a href="{{ route('testimonials') }}" {{ Route::is('testimonial*') ? 'class=active' : null }}>
                    <p>Testimonials</p>
                </a>
            </li>
			<li>
                <a href="{{ route('scholen') }}" {{ Route::is('scho*') ? 'class=active' : null }}>
                    <p>Scholen</p>
                </a>
            </li>
			<li>
				<a href="{{ route('nieuws') }}" {{ (Route::is('nieuws') || Route::is('artikel')) ? 'class=active' : null }}>
					<p>Nieuws</p>
				</a>
			</li>
			<li>
                <a href="{{ route('studentengids') }}" {{ Route::is('studentengids') ? 'class=active' : null }}>
                    <p>Studentengids</p>
                </a>
            </li>
			<li>
                <form method="get" action="{{ route('zoeken') }}" {{ Route::is('zoeken') ? 'class=active' : null }}>
                    {{ csrf_field() }}
                    <input type="submit" value="Zoeken">
                </form>
            </li>
		</ul>
	</nav>
	@yield('vid', $vid =  false)

    <img src="{{ asset('storage/') }}/@yield('heroImage', 'hero_images/' . Route::currentRouteName() . '.jpeg')"
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

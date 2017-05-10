<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', str_replace('_', ' ', Route::currentRouteName())) - Kom Af</title>
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
		<a href="{{ route('algemeen') }}"><img src="{{ asset('img/antwerpen_logo.png') }}" alt="Antwerpen"></a>
		<ul>
			<li>
                <a href="{{ route('algemeen') }}" class="{{ Route::is('algemeen') ? 'active' : null }}">
                    <p>algemeen</p>
                </a>
            </li>
			<li>
                <a href="{{ route('testimonials') }}" class="{{ Route::is('testimonial*') ? 'active' : null }}">
                    <p>testimonials</p>
                </a>
            </li>
			<li>
                <a href="{{ route('scholen') }}" class="{{ Route::is('scho*') ? 'active' : null }}">
                    <p>scholen</p>
                </a>
            </li>
			<li>
                <a href="{{ route('nieuws') }}" class="{{ (Route::is('nieuws') || Route::is('artikel')) ? 'active' : null }}">
                    <p>nieuws</p>
                </a>
            </li>
			<li>
                <a href="{{ route('gids') }}" class="{{ Route::is('gids') ? 'active' : null }}">
                    <p>studentengids</p>
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
	@yield('vid', $vid = false)

    @foreach($heroImages as $heroImage)
		@if($vid && Route::currentRouteName() == $heroImage->template_name)
			<video src="{{ asset('vid/' . $heroImage->hero_image_url) }}"></video>
		@elseif(Route::currentRouteName() == $heroImage->template_name)
			<img src="{{ asset('img/hero_images/' . $heroImage->hero_image_url) }}" alt="{{ $heroImage->template_name }}">
        @endif
    @endforeach

    <h1>@yield('title', str_replace('_', ' ', Route::currentRouteName()))</h1>
</header>
<main class="{{ Route::currentRouteName() }}">
	@yield('content')
</main>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

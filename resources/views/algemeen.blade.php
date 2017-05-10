@extends('layouts.app')

@section('vid', $vid = false)

@section('content')
	<a href="{{ route('testimonial', ['testimonial' => 2]) }}">
		<section>
			<h2>Wat studenten vinden van Antwerpen</h2>
			<blockquote>Antwerpen is de stad die mij leerde terug te genieten</blockquote>
			<figure>
				<img src="{{ asset('img/testimonial_images/julie.jpg') }}" alt="red juliet">
				<figcaption>Red Juliet</figcaption>
			</figure>
		</section>
	</a>
	<section>
		<h2>Ondek unieke plekken dankzij onze game "KomAf"</h2>
		<a href="https://apple.be/benl/">
			<p>AppStore</p>
			<img src="{{ asset('img/alien_sitting.png') }}" alt="alien">
		</a>
		<a href="https://google.be">
			<p>PlayStore</p>
		</a>
	</section>
	<section>
		<h2>Alle wegen leiden naar Antwerpen</h2>
		<a href="http://delijn.be">
			<img src="{{ asset('img/de_lijn.svg') }}" alt="de lijn - busregeling">
			<img src="{{ asset('img/bus.png') }}" alt="bus">
		</a>
		<a href="http://nmbs.be/">
			<img src="{{ asset('img/nmbs.svg') }}" alt="nmbs - treinregeling">
			<img src="{{ asset('img/trein.png') }}" alt="trein">
		</a>
	</section>
	<a href="https://studentkotweb.be">
		<section>
			<h2>Beleef Antwerpen vanop kot</h2>
			<p>Kotweb is de site om gemakkelijk een kot te vinden</p>
		</section>
	</a>
	@if($news)
		@foreach($news as $article)
			<a href="{{ $article->url }}">
				<section>
					<h2>Nieuws speciaal voor jou</h2>
					<article>
						<time>{{ $article->time_ago }} geleden</time>
						<img src="{{ asset('img/' . $article->image_url) }}" alt="{{ $article->title }}">
						<h5>{{ $article->title }}</h5>
						<p>{{ $article->content }}</p>
					</article>
				</section>
			</a>
		@endforeach
	@endif
	<a href="{{ route('gids') }}">
		<section>
			<h2>De online studentengids wijst je de weg</h2>
			<p>Vind de leukste en goedkoopste plekken in Antwerpen</p>
		</section>
	</a>
@endsection

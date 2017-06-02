@extends('layouts.app')

@section('vid', $vid = false)

@section('content')
	@if($testimonial)
		<a href="{{ route('testimonial', ['testimonial' => $testimonial->id]) }}" class="testi">
			<img src="{{ asset('img/'.$testimonial->image_url) }}" alt="{{ $testimonial->student_name }}">
			<h2>Wat studenten vinden van Antwerpen?</h2>
			<h3>"{{ $testimonial->quote }}"</h3>
		</a>
	@endif
	<section class="openbaar">
		<h2>Alle wegen leiden naar Antwerpen.</h2>
		<p>Bezoek Antwerpen met het openbaar vervoer >></p>
		<a href="http://delijn.be">
			<figure>
				<div>
					<img src="{{ asset('img/algemeen_images/bus.svg') }}" alt="de lijn - busregeling">
				</div>
				<figcaption>de lijn</figcaption>
			</figure>
		</a>
		<a href="http://nmbs.be/">
			<figure>
				<div>
					<img src="{{ asset('img/algemeen_images/trein.svg') }}" alt="nmbs - treinregeling">
				</div>
				<figcaption>nmbs</figcaption>
			</figure>
		</a>
	</section>
	@if($news)
		@if($news->user_id)
			<a href="{{ $news->article_url }}" class="news">
		@else
			<a href="{{ route('artikel',['article',$news->id]) }}" class="news">
		@endif

			@if($news->user_id)
				<img src="{{ asset('img/' . $news->image_url) }}" alt="{{ $news->title }}">
			@else
				<img src="{{ $news->image_url }}" alt="{{ $news->title }}">
			@endif
			<h2>{{ $news->title }}</h2>
			<h3>{{ $news->content }}</h3>
		</a>
	@endif
	<section class="gids">
		<h2>De online studentengids wijst je de weg</h2>
		<p>Bekijk hier dé studentengids van Gate15 online >></p>
		<a href="{{ route('studentengids') }}">
			<figure>
				<div>
					<img src="{{ asset('img/algemeen_images/boek.svg') }}" alt="de studentengids">
				</div>
				<figcaption>de studentengids</figcaption>
			</figure>
		</a>
	</section>
	<a href="https://studentkotweb.be" class="kot">
		<img src="/img/algemeen_images/kot.jpg" alt="tafel met plant en gsm in een studenten kot">
		<h2>Beleef Antwerpen vanop kot.</h2>
		<h3>Kotweb is de site om gemakkelijk een kot te vinden</h3>
	</a>
	<section class="game">
		<h2>Ondek unieke plekken dankzij onze game "KomAf".</h2>
		<p>Download hier onze game >></p>
		<a href="https://google.be">
			<figure>
				<div>
					<img src="{{ asset('img/algemeen_images/play.svg') }}" alt="PlayStore">
				</div>
				<figcaption>PlayStore</figcaption>
			</figure>
		</a>
		<a href="https://apple.be/benl/">
			<figure>
				<div>
					<img src="{{ asset('img/algemeen_images/apple.svg') }}" alt="AppStore">
				</div>
				<figcaption>AppStore</figcaption>
			</figure>
		</a>

	</section>
@endsection

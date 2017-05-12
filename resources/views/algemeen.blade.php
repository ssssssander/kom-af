@extends('layouts.app')

@section('vid', $vid = false)

@section('content')
	<a href="{{ route('testimonial', ['testimonial' => 2]) }}">
		<section>
			<h2>Wat studenten vinden van Antwerpen?</h2>
			<figure>
				<figcaption>"Antwerpen is de stad die mij leerde terug te genieten."</figcaption>
				<img src="{{ asset('img/testimonial_images/julie_focus.jpg') }}" alt="julie">
			</figure>
		</section>
	</a>
	<section>
		<h2>Ondek unieke plekken dankzij onze game "KomAf".</h2>
		<a href="https://apple.be/benl/">
			<img src="{{ asset('img/appStore.svg') }}" alt="AppStore">
			<img src="{{ asset('img/alien_sitting.png') }}" alt="alien" role="presentation">
		</a>
		<a href="https://google.be">
			<img src="{{ asset('img/play_store.png') }}" alt="PlayStore">
		</a>
	</section>
	<section>
		<h2>Alle wegen leiden naar Antwerpen.</h2>
		<a href="http://delijn.be">
			<img src="{{ asset('img/de_lijn.svg') }}" alt="de lijn - busregeling">
			<img src="{{ asset('img/bus.svg') }}" alt="bus" role="presentation">
		</a>
		<a href="http://nmbs.be/">
			<img src="{{ asset('img/nmbs.svg') }}" alt="nmbs - treinregeling">
			<img src="{{ asset('img/trein.svg') }}" alt="trein" role="presentation">
		</a>
	</section>
	<a href="https://studentkotweb.be">
		<section>
			<h2>Beleef Antwerpen vanop kot.</h2>
			<p>Kotweb is de site om gemakkelijk een kot te vinden</p>
		</section>
	</a>
	@if($news)
		{{--@foreach($news as $article)--}}
			@if($news->user_id)
			<a href="{{ $news->article_url }}">
				@else
					<a href="{{ route('artikel',['article',$news->id]) }}">
				@endif
				<section>
					<h2>Nieuws speciaal voor jou.</h2>
					<article>
						<time>{{ $news->time_ago }} geleden</time>
						@if($news->user_id)
							<img src="{{ asset('img/' . $news->image_url) }}" alt="{{ $news->title }}">
							@else
							<img src="{{ $news->image_url }}" alt="{{ $news->title }}">
						@endif
						<h5>{{ $news->title }}</h5>
						<p>{{ $news->content }}</p>
					</article>
				</section>
			</a>
		{{--@endforeach--}}
	@endif
	<a href="{{ route('studentengids') }}">
		<section>
			<h2>De online studentengids wijst je de weg</h2>
			<p>Vind de leukste en goedkoopste plekken in Antwerpen</p>
		</section>
	</a>
@endsection

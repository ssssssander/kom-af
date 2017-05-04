@extends('layouts.app')

@section('vid',$vid = false)

@section('heroImg',"Grote_Markt_Antwerpen.jpg")
@section('heroAlt',"GroteMarkt van Antwerpen")

@section('content')
	<section>
		<h2>Wat studenten vinden van antwerpen</h2>
		<a href="{{ route('testimonial',['testimonial' => 2]) }}">
			<blockquote>Antwerpen is de stad die mij leerde terug te genieten</blockquote>
			<figure>
				<img src="/img/Red_Juliet.jpg" alt="red juliet">
				<figcaption>Red Juliet</figcaption>
			</figure>
		</a>
	</section>
	<section>
		<h2>Ondek unieke plekken dankzij onze game "KomAf"</h2>
		<a href="https://apple.be/benl/">AppStore</a>
		<a href="https://google.be/">PlayStore</a>
		<img src="/img/sittingplayer.png" alt="alien">
	</section>
	<section>
		<h2>Alle wegen leiden naar Antwerpen</h2>
		<a href="http://delijn.be"><img src="/img/de%20lijn.svg" alt="de lijn - busregeling"></a>
		<a href="http://nmbs.be/"><img src="/img/nmbs.svg" alt="nmbs - treinregeling"></a>
		<img src="/img/bus.png" alt="bus">
		<img src="/img/trein.png" alt="trein">
	</section>
	<section>
		<h2>Beleef Antwerpen vanop kot</h2>
		<a href="https://studentkotweb.be">Kotweb is de site om gemakkelijk een kot te vinden. </a>
	</section>
	<section>
		<h2></h2>
	</section>
@endsection

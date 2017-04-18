@extends('layouts.app')

@section('page', 'nieuws')

@section('content')
	<article>
		<a href="{{ route('artikel',['id' => 2]) }}">
			<img src="/img/Grote_Markt_Antwerpen.jpg" alt="grote markt">
			<h5>Test Alarm</h5>
			<time>5 uur geleden.</time>
			<p>bla bla bla</p>
		</a>
	</article>
	<article>
		<a href="{{ route('artikel',['id' => 2]) }}">
			<img src="/img/Grote_Markt_Antwerpen.jpg" alt="grote markt">
			<h5>Test Alarm</h5>
			<time>5 uur geleden.</time>
			<p>bla bla bla</p>
		</a>
	</article>
	<article>
		<a href="{{ route('artikel',['id' => 2]) }}">
			<img src="/img/Grote_Markt_Antwerpen.jpg" alt="grote markt">
			<h5>Test Alarm</h5>
			<time>5 uur geleden.</time>
			<p>bla bla bla</p>
		</a>
	</article>
	<article>
		<a href="{{ route('artikel',['id' => 2]) }}">
			<img src="/img/Grote_Markt_Antwerpen.jpg" alt="grote markt">
			<h5>Test Alarm</h5>
			<time>5 uur geleden.</time>
			<p>bla bla bla</p>
		</a>
	</article>
@endsection

@extends('layouts.app')

@section('page', 'nieuws')

@section('content')
	<article class="accent">
		<a href="{{ route('artikel',['id' => 2]) }}">
			<img src="/img/Grote_Markt_Antwerpen.jpg" alt="grote markt">
			<h5>Test Alarm</h5>
			<p>bla bla bla</p>
		</a>
	</article>
@endsection

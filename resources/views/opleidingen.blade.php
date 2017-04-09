@extends('layouts.app')

@section('page', 'scholen')

@section('content')
	<figure>
		<img src="/img/lgo%20KdG.jpg" alt="KdG">
		<figcaption>Karel De Grote Hogeschool</figcaption>
	</figure>
	<ul>
		<li><a href="{{ route('opleiding',['id' => 2]) }}">Multimedia Technologie</a></li>
		<li><a href="{{ route('opleiding',['id' => 2]) }}">Multimedia Technologie</a></li>
		<li><a href="{{ route('opleiding',['id' => 2]) }}">Multimedia Technologie</a></li>
	</ul>



@endsection

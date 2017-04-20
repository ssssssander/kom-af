@extends('layouts.app')

@section('title', $school->name)

@section('content')
	<figure>
		<img src="/img/{{ $school->image_url }}" alt="{{ $school->name }}">
		<figcaption>{{ $school->name }}</figcaption>
	</figure>
	<ul>
        <li><a href="{{ route('opleiding', ['id' => 2]) }}">Multimedia Technologie</a></li>
		<li><a href="{{ route('opleiding', ['id' => 2]) }}">To do: richtingen scrapen</a></li>
	</ul>
@endsection

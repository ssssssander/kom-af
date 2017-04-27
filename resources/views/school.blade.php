@extends('layouts.app')

@section('title', $school->name)

@section('content')
	<figure>
		<img src="/img/{{ $school->image_url }}" alt="{{ $school->name }}">
		<figcaption>{{ $school->name }}</figcaption>
	</figure>
	<ul>
        @foreach($school->courses as $course)
            <li><a href="{{ route('opleiding', ['course' => $course->id]) }}">{{ $course->name }}</a></li>
        @endforeach
	</ul>
@endsection

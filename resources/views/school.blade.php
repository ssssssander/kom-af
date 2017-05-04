@extends('layouts.app')

@section('title', $school->name)

@section('content')
    <a href="{{ $school->school_url }}">
    	<figure>
    		<img src="/img/school_images/{{ $school->image_url }}" alt="{{ $school->name }}">
    		<figcaption>{{ $school->name }}</figcaption>
    	</figure>
    </a>
	<ul>
        @foreach($school->courses as $course)
            <li><a href="{{ route('opleiding', ['course' => $course->id]) }}">{{ $course->name }}</a></li>
        @endforeach
	</ul>
@endsection

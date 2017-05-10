@extends('layouts.app')

@section('title', $school->name)

@section('content')
    <a href="{{ $school->school_url }}">
    	<img src="{{ asset('img/school_images/' . $school->image_url) }}" alt="{{ $school->name }}">
    </a>
	<ul>
        @foreach($courses as $course)
            <li>
                <a href="{{ $course->course_url }}">{{ $course->name }}</a>
                <span>{{ $course->description }}</span>
            </li>
        @endforeach
	</ul>
    {{ $courses->links() }}
@endsection

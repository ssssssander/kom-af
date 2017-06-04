@extends('layouts.app')

@section('title', $school->name)

@section('content')
	<ul>
        @foreach($courses as $course)
            <a href="{{ $course->course_url }}">
                <li>{{ $course->name }}</li>
            </a>
        @endforeach
	</ul>
    {{ $courses->links() }}
@endsection

@extends('layouts.app')

@section('title', $school->name)

@section('content')
	<ol>
        @foreach($courses as $course)
			<li>
				<a href="{{ $course->course_url }}">{{ $course->name }}</a>
			</li>
        @endforeach
	</ol>
    {{ $courses->links() }}
@endsection

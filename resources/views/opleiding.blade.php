@extends('layouts.app')

@section('content')
	<figure>
		<figcaption>{{ $course->school->name }}</figcaption>
	</figure>
	<img src="/img/{{ $course->contact_image }}" alt="{{ $course->contact_name }}">
	<h5>{{ $course->contact_name }}</h5>
    <a href="mailto:{{ $course->contact_email }}">{{ $course->contact_email }}</a>
	<a href="{{ $course->course_url }}">{{ $course->course_url }}</a>
@endsection

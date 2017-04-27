@extends('layouts.app')

@section('heroImg',"Grote_Markt_Antwerpen.jpg")
@section('heroAlt',"GroteMarkt van Antwerpen")

@section('content')
	<figure>
		<figcaption>{{ $course->school->name }}</figcaption>
	</figure>
	<img src="/img/{{ $course->contact_image }}" alt="{{ $course->contact_name }}">
	<h5>{{ $course->contact_name }}</h5>
	<a href="mailto:{{ $course->contact_email }}">{{ $course->contact_email }}</a>
@endsection

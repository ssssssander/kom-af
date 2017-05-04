@extends('layouts.app')

@section('title', $testimonial->title)

@section('content')
    @if($testimonial->video_url != '?')
	   <iframe src="{{ $testimonial->video_url }}" frameborder="0" allowfullscreen></iframe>
    @endif
    @if($testimonial->image_url != '?')
       <img src="/img/testimonial_images/{{ $testimonial->image_url }}" alt="{{ $testimonial->title }}">
    @endif
    <img src="/img/student_images/{{ $testimonial->student_image_url }}" alt="{{ $testimonial->student_name }}">
	<h5>{{ $testimonial->student_name }}</h5>
	<p>{{ $testimonial->content }}</p>
@endsection

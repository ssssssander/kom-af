@extends('layouts.app')

@section('heroImage', $testimonial->image_url)
@section('title', $testimonial->title)

@section('content')
    @if($testimonial->video_url != '')
	   <iframe src="{{ $testimonial->video_url }}" frameborder="0" allowfullscreen></iframe>
    @endif
    @if($testimonial->image_url != '')
       <img src="{{ asset('storage/' . $testimonial->image_url) }}" alt="{{ $testimonial->title }}">
    @endif
	<p>{{ $testimonial->content }}</p>
@endsection

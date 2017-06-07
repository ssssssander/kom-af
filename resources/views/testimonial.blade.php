@extends('layouts.app')

@section('heroImage', $testimonial->image_url)
@section('title', $testimonial->title)

@section('content')
    <p>{!! $testimonial->content !!}</p>
    @if($testimonial->video_url != '')
       <iframe src="{{ $testimonial->video_url }}" frameborder="0" allowfullscreen width=816 height=459></iframe>
    @endif
@endsection

@extends('layouts.app')

@section('content')
	<ul>
        @foreach($testimonials as $testimonial)
            <li>
                <a href="{{ route('testimonial', ['testimonial' => $testimonial->id]) }}">
					<div></div>
					<h2>{{ $testimonial->title }}</h2>
                    @if($testimonial->video_url != '')
                        <iframe src="{{ $testimonial->video_url }}" frameborder="0" allowfullscreen></iframe>
                    @endif
                    @if($testimonial->image_url != '')
                        <img src="{{ asset('img/' . $testimonial->image_url) }}" alt="{{ $testimonial->title }}">
                    @endif
                    <p>{{ $testimonial->content }}</p>
                </a>
            </li>
        @endforeach
	</ul>
@endsection

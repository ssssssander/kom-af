@extends('layouts.app')

@section('content')
	<ul>
        @foreach($testimonials as $testimonial)
            <li>
                <a href="{{ route('testimonial', ['testimonial' => $testimonial->id]) }}">
                    @if($testimonial->video_url != '?')
                        <iframe src="{{ $testimonial->video_url }}" frameborder="0" allowfullscreen></iframe>
                    @endif
                    @if($testimonial->image_url != '?')
                        <img src="/img/{{ $testimonial->image_url }}" alt="{{ $testimonial->title }}">
                    @endif
                    <h5>{{ $testimonial->title }}</h5>
                </a>
            </li>
        @endforeach
	</ul>
@endsection

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
                        <img src="{{ asset('storage/' . $testimonial->image_url) }}" alt="{{ $testimonial->title }}">
                    @endif
                    @php
                        $words = explode(' ', $testimonial->content);
                    @endphp
                    @if(count($words) > 50)
                        @php
                            array_splice($words, 50);
                            $kort = implode(' ', $words);
                        @endphp
                        <p>{{ strip_tags($kort) }} ...</p>
                    @else
                        <p>{{ strip_tags($testimonial->content) }}</p>
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
    {{ $testimonials->links() }}
@endsection

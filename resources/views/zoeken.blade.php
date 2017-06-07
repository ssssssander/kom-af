@extends('layouts.app')

@section('title', 'Zoeken naar "' . $query . '"')

@section('content')
	<ol>
        @if(!$searchResults->isEmpty())
            @foreach($searchResults as $searchResult)
                <li>
                    @if($searchResult->hasAttribute('article_url'))
                        @if($searchResult->article_url != null)
                            <a href="{{ $searchResult->article_url }}">
                                <img src="{{ $searchResult->image_url }}" alt="{{ $searchResult->title }}">
                                <p>{{ $searchResult->title }}</p>
                            </a>
                        @else
                            <a href="{{ route('artikel', ['article' => $searchResult->id]) }}">
                                <img src="{{ asset('storage/' . $searchResult->image_url) }}" alt="{{ $searchResult->title }}">
                                <p>{{ $searchResult->title }}</p>
                            </a>
                        @endif
                    @endif
                    @if($searchResult->hasAttribute('course_url'))
                        <a href="{{ $searchResult->course_url }}">
                            <img src="{{ asset('img/' . $searchResult->school->image_url) }}" alt="{{ $searchResult->name }}">
                            <p>{{ $searchResult->name }}</p>
                        </a>
                    @endif
                    @if($searchResult->hasAttribute('item_url'))
                        <a href="{{ $searchResult->item_url }}">
                            <p>{{ $searchResult->name }}</p>
                        </a>
                    @endif
                    @if($searchResult->hasAttribute('video_url'))
                        @if($searchResult->image_url != null)
                            <a href="{{ route('testimonial', ['testimonial' => $searchResult->id]) }}">
                                <img src="{{ asset('storage/' . $searchResult->image_url) }}" alt="{{ $searchResult->title }}">
                                <p>{{ $searchResult->title }}</p>
                            </a>
                        @else
                            <a href="{{ route('testimonial', ['testimonial' => $searchResult->id]) }}">
                                <p>{{ $searchResult->title }}</p>
                            </a>
                        @endif
                    @endif
                </li>
            @endforeach
        @else
            <h2>Niets gevonden!</h2>
        @endif
	</ol>
    {{ $searchResults->links() }}
@endsection

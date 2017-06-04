@extends('layouts.app')

@section('content')
    @foreach($articles as $article)
        <article>
            @if($article->user_id == null)
                <a href="{{ $article->article_url }}">
					<div></div>
					<h2>{{ $article->title }}</h2>
                    <img src="{{ $article->image_url }}" alt="{{ $article->title }}">
            @else
                <a href="{{ route('artikel', ['article' => $article->id]) }}">
					<div></div>
					<h2>{{ $article->title }}</h2>
                    <img src="{{ asset('img/' . $article->image_url) }}" alt="{{ $article->title }}">
            @endif
			@php
				$words = explode(' ', $article->content);
			@endphp
			@if(count($words) > 50)
				@php
					array_splice($words, 50);
					$kort = implode(' ', $words);
				@endphp
					<p>{{ $kort }} ...</p>
			@else
				<p>{{ $article->content }}</p>
			@endif
            </a>
        </article>
    @endforeach
    {{ $articles->links() }}
@endsection

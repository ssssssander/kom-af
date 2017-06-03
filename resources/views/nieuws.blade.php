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
                <p>{{ $article->content }}</p>
            </a>
        </article>
    @endforeach
    {{ $articles->links() }}
@endsection

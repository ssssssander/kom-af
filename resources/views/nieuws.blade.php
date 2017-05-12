@extends('layouts.app')

@section('content')
    @foreach($articles as $article)
        <article>
            @if($article->user_id == null)
                <a href="{{ $article->article_url }}">
                    <img src="{{ $article->image_url }}" alt="{{ $article->title }}">
            @else
                <a href="{{ route('artikel', ['article' => $article->id]) }}">
                    <img src="{{ asset('img/' . $article->image_url) }}" alt="{{ $article->title }}">
            @endif
                <h5>{{ $article->title }}</h5>
                @if($article->user_id != null)
                    <p>Door {{ $article->user->first_name . ' ' . $article->user->last_name }}</p>
                @endif
                <time>{{ $article->time_ago }} geleden</time>
                <p>{{ $article->content }}</p>
            </a>
        </article>
    @endforeach
    {{ $articles->links() }}
@endsection

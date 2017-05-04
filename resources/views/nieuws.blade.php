@extends('layouts.app')

@section('heroImg',"Grote_Markt_Antwerpen.jpg")
@section('heroAlt',"GroteMarkt van Antwerpen")

@section('content')
    @foreach($articles as $article)
        <article>
            <a href="{{ url($article->article_url) }}" target="_blank">
                <img src="/img/{{ $article->image_url }}" alt="{{ $article->title }}">
                <h5>{{ $article->title }}</h5>
                <time>{{ $article->time_ago }} geleden</time>
                <p>{{ $article->content }}</p>
            </a>
        </article>
    @endforeach
    {{ $articles->links() }}
@endsection

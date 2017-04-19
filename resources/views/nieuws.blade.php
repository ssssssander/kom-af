@extends('layouts.app')

@section('page', 'nieuws')

@section('content')
    @foreach($articles as $article)
        <article>
            <a href="{{ route('artikel', ['id' => $article['id']]) }}">
                <img src="{{ $article['image_url'] }}" alt="{{ $article['image_alt'] }}">
                <h5>{{ $article['title'] }}</h5>
                <time>5 uur geleden</time>
                <p>{{ $article['content'] }}</p>
            </a>
        </article>
    @endforeach
@endsection

@extends('layouts.app')

@section('content')
    @foreach($articles as $article)
        <article>
            <a href="{{ route('artikel', ['id' => $article->id]) }}">
                <img src="/img/{{ $article->image_url }}" alt="{{ $article->title }}">
                <h5>{{ $article->title }}</h5>
                <p>Door {{ $article->user->first_name }} {{ $article->user->last_name }}</p>
                <time>x uur geleden</time>
                <p>{{ $article->content }}</p>
            </a>
        </article>
    @endforeach
@endsection

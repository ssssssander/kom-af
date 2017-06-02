@extends('layouts.app')

@section('heroImage', $article->image_url)
@section('title', $article->title)

@section('content')
    <article>
        <h5>{{ $article->title }}</h5>
        <p>Door {{ $article->user->first_name . ' ' . $article->user->last_name }}</p>
        <time>{{ $article->time_ago }} geleden</time>
        <p>{{ $article->content }}</p>
    </article>
@endsection

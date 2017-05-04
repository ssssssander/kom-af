@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <article>
        <h5>{{ $article->title }}</h5>
        <time>{{ $article->time_ago }} geleden</time>
        <p>{{ $article->content }}</p>
    </article>
@endsection

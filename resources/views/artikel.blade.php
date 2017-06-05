@extends('layouts.app')

@section('heroImage', $article->image_url)
@section('title', $article->title)

@section('content')
    <article>
        <h5>{{ $article->title }}</h5>
        <p>{{ $article->content }}</p>
    </article>
@endsection

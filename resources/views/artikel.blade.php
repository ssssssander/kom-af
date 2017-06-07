@extends('layouts.app')

@section('heroImage', $article->image_url)
@section('title', $article->title)

@section('content')
    <article>
        <p>{!! $article->content !!}</p>
    </article>
@endsection

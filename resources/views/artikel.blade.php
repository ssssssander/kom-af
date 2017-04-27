@extends('layouts.app')

@section('title', $article->title)

@section('content')
	<article>
		<img src="/img/{{ $article->image_url }}" alt="{{ $article->title }}">
		<div>
			<h5>{{ $article->title }}</h5>
			<p>{{ $article->content }}</p>
		</div>
	</article>
@endsection

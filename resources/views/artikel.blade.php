@extends('layouts.app')

@section('content')
	<article>
		<img src="{{ $article->image_url }}" alt="{{ $article->title }}">
		<div>
			<h5>{{ $article->title }}</h5>
			<p>{{ $article->content }}</p>
		</div>
	</article>
@endsection

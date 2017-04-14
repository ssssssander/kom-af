@extends('layouts.app')

@section('page', 'nieuws')

@section('content')
    @foreach($articles as $article)
        @if($article['id'] == $id)
        	<article>
    			<img src="{{ $article['image_url'] }}" alt="{{ $article['image_alt'] }}">
    			<div>
    				<h5>{{ $article['title'] }}</h5>
    				<p>{{ $article['content'] }}</p>
    			</div>
        	</article>
        @endif
    @endforeach
@endsection

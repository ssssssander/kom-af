@extends('layouts.app')

@section('title', 'zoeken naar "' . $query . '"');

@section('content')
	<ul>
        @if($articleResults)
            @foreach($articleResults as $articleResult)
                <li>
                    @if($articleResult->user_id == '')
                        <a href="{{ $articleResult->article_url }}">
                            <img src="{{ $articleResult->image_url }}" alt="{{ $articleResult->title }}">
                            <p>{{ $articleResult->title }}</p>
                        </a>
                    @else
                        <a href="{{ route('artikel', ['article' => $articleResult->id]) }}">
                            <img src="{{ asset('img/article_images/' . $articleResult->image_url) }}" alt="{{ $articleResult->title }}">
                            <p>{{ $articleResult->title }}</p>
                            <p>Door {{ $articleResult->user->first_name . ' ' . $articleResult->user->last_name }}</p>
                        </a>
                    @endif
                </li>
            @endforeach
        @endif
        @if($courseResults)
            @foreach($courseResults as $courseResult)
                <li>
                    <a href="{{ $courseResult->course_url }}">
                        <img src="{{ asset('img/school_images/' . $courseResult->school->image_url) }}" alt="{{ $courseResult->school->name }}">
                        <p>{{ $courseResult->name }}</p>
                    </a>
                </li>
            @endforeach
        @endif
	</ul>
@endsection

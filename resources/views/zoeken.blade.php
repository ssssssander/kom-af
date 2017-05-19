@extends('layouts.app')

@section('title', 'Zoeken naar "' . $query . '"')

@section('content')
	<ul>
        @if(!$articleResults->isEmpty())
            <h2>Nieuws</h2>
            @foreach($articleResults as $articleResult)
                <li>
                    @if($articleResult->user_id == null)
                        <a href="{{ $articleResult->article_url }}">
                            <img src="{{ $articleResult->image_url }}" alt="{{ $articleResult->title }}">
                            <p>{{ $articleResult->title }}</p>
                        </a>
                    @else
                        <a href="{{ route('artikel', ['article' => $articleResult->id]) }}">
                            <img src="{{ asset('img/' . $articleResult->image_url) }}" alt="{{ $articleResult->title }}">
                            <p>{{ $articleResult->title }}</p>
                            <p>Door {{ $articleResult->user->first_name . ' ' . $articleResult->user->last_name }}</p>
                        </a>
                    @endif
                </li>
            @endforeach
        @endif
        @if(!$courseResults->isEmpty())
            <h2>Opleidingen</h2>
            @foreach($courseResults as $courseResult)
                <li>
                    <a href="{{ $courseResult->course_url }}">
                        <img src="{{ asset('img/' . $courseResult->school->image_url) }}" alt="{{ $courseResult->school->name }}">
                        <p>{{ $courseResult->name }}</p>
                    </a>
                </li>
            @endforeach
        @endif
        @if(!$studentGuideResults->isEmpty())
            <h2>Studentengids</h2>
            @foreach($studentGuideResults as $studentGuideResult)
                <li>
                    <a href="{{ $studentGuideResult->item_url }}">
                        <p>{{ $studentGuideResult->name }}</p>
                    </a>
                </li>
            @endforeach
        @endif
        @if($articleResults->isEmpty() && $courseResults->isEmpty() && $studentGuideResults->isEmpty())
            <h2>Niets gevonden!</h2>
        @endif
        {{--
            @if($results)
                @foreach($results as $result)
                    @if(isset($result['title']))
                        <li>
                            @if($result['user_id'] == '')
                                <a href="{{ $result['article_url'] }}">
                                    <img src="{{ $result['image_url'] }}" alt="{{ $result['title'] }}">
                                    <p>{{ $result['title'] }}</p>
                                </a>
                            @else
                                <a href="{{ route('artikel', ['article' => $result['id']]) }}">
                                    <img src="{{ asset('img/' . $result['image_url']) }}" alt="{{ $result['title'] }}">
                                    <p>{{ $result['title'] }}</p>
                                    <p>Door {{ $result['user_id'] . ' ' . $result['user_id'] }}</p>
                                </a>
                            @endif
                        </li>
                    @elseif(isset($result['name']))
                        <li>
                            <a href="{{ $result['course_url'] }}">
                                <img src="{{ asset('img/' . $result['school_id']) }}" alt="{{ $result['school_id'] }}">
                                <p>{{ $result['name'] }}</p>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        --}}
	</ul>
@endsection

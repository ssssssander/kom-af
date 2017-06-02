@extends('layouts.app')

@section('title', 'Zoeken naar "' . $query . '"')

@section('content')
	<ul>
        @if(!$searchResults->isEmpty())
            @foreach($searchResults as $searchResult)
                <li>
                    @if(isset($searchResult->name))
                        <p>{{ $searchResult->name }}</p>
                    @else
                        <p>{{ $searchResult->title }}</p>
                    @endif
                </li>
            @endforeach
        @else
            <h2>Niets gevonden!</h2>
        @endif
	</ul>
    {{ $searchResults->links() }}
@endsection

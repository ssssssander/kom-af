@extends('layouts.app')

@section('content')
    @foreach($schools as $school)
    	<figure>
    		<a href="{{ route('opleidingen', ['id' => $school->id]) }}">
    			<div>
    				<img src="{{ $school->image_url }}" alt="{{ $school->name }}">
    			</div>
    			<figcaption>{{ $school->name }}</figcaption>
    		</a>
    	</figure>
    @endforeach
@endsection

@extends('layouts.app')

@section('content')
    @foreach($schools as $school)
    	<figure>
    		<a href="{{ route('school', ['school' => $school->id]) }}">
    			<div>
    				<img src="{{ asset('img/school_images/' . $school->image_url) }}" alt="{{ $school->name }}">
    			</div>
    			<figcaption>{{ $school->name }}</figcaption>
    		</a>
    	</figure>
    @endforeach
@endsection

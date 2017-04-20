@extends('layouts.app')

@section('content')
    @foreach($schools as $school)
    	<figure>
    		<a href="{{ route('school', ['id' => $school->id]) }}">
    			<div>
    				<img src="/img/{{ $school->image_url }}" alt="{{ $school->name }}">
    			</div>
    			<figcaption>{{ $school->name }}</figcaption>
    		</a>
    	</figure>
    @endforeach
@endsection

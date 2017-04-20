@extends('layouts.app')

@section('content')
	<ul>
		<li>
			<a href="{{ route("testimonial",['id'=>2]) }}">
				<img src="/img/test1.png" alt="Thomas">
				<h5>Thomas uit KdG</h5>
			</a>
		</li>
		<li>
			<a href="{{ route("testimonial",['id'=>2]) }}">
				<img src="/img/test1.png" alt="Sander">
				<h5>Sander uit KdG</h5>
			</a>
		</li>
		<li>
			<a href="{{ route("testimonial",['id'=>2]) }}">
				<img src="/img/test1.png" alt="Stefan">
				<h5>Stefan uit KdG</h5>
			</a>
		</li>
		<li>
			<a href="{{ route("testimonial",['id'=>2]) }}">
				<img src="/img/test1.png" alt="Cindy">
				<h5>Cindy uit KdG</h5>
			</a>
		</li>
	</ul>
@endsection

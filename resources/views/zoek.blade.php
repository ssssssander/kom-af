@extends('layouts.app')

@section('content')
	<ul>
		<li><a href="{{ route('nieuws') }}"><img src="/img/kotkamer.jpg" alt="test"><p>Resultaat 1</p></a></li>
		<li><a href="{{ route('nieuws') }}"><p>Resultaat 2</p></a></li>
	</ul>
@endsection

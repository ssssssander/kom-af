@extends('layouts.app')

@section('content')
	<ul>
		<li>
			<a href="{{ route("testimonial",['id'=>2]) }}">
				<iframe src="https://www.youtube.com/embed/DQd633bUoxk" frameborder="0" allowfullscreen></iframe>
				<h5>Trots op onze studenten: Robotarm ASLAN spelt Vlaamse gebarentaal</h5>
			</a>
		</li>
		<li>
			<a href="{{ route("testimonial",['id'=>2]) }}">
				<img src="/img/rat.jpeg" alt="rat">
				<h5>Straf Antwerps project: ratten trainen om levens te redden</h5>
			</a>
		</li>
		<li>
			<a href="{{ route("testimonial",['id'=>2]) }}">
				<iframe src="https://www.youtube.com/embed/Xqw7hnzWPMM" frameborder="0" allowfullscreen></iframe>
				<h5>Re-Do blaast papier nieuw leven in</h5>
			</a>
		</li>
		<li>
			<a href="{{ route("testimonial",['id'=>2]) }}">
				<img src="/img/Red_Juliet.jpg" alt="Red_Juliet">
				<h5>Julie Vrijens: van artdirector tot ontwerpster van een Oscarjurk</h5>
			</a>
		</li>
	</ul>
@endsection

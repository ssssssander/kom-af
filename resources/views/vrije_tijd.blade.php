@extends('layouts.app')

@section('content')
	<filter>
		<form action="">
			{{ csrf_field() }}
			<h5>Categoriën</h5>
			<label><input type="checkbox">bla</label>
			<label><input type="checkbox">bla</label>
			<label><input type="checkbox">bla</label>
		</form>
	</filter>
	<ul>
		<li>
			<a href="http://henm.com">

				<h5>H&M</h5>
				<p>blablablablabla blablablalbalbal</p>
			</a>
		</li>
		<li>
			<a href="http://henm.com">
				<h5>H&M</h5>
				<p>blablablablabla blablablalbalbal</p>
			</a>
		</li>
		<li>
			<a href="http://henm.com">
				<h5>H&M</h5>
				<p>blablablablabla blablablalbalbal</p>
			</a>
		</li>
		<li>
			<a href="http://henm.com">
				<h5>H&M</h5>
				<p>blablablablabla blablablalbalbal</p>
			</a>
		</li>
	</ul>
@endsection

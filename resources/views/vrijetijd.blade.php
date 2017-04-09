@extends('layouts.app')

@section('page', 'vrije tijd')

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
			<a href="http://henm.be">
				<figure>
					<img src="H&M.png" alt="H&M">
					<figcaption>
						<h5>H&M</h5>
						<p>blablablablabla blablablalbalbal</p>
					</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="http://henm.be">
				<figure>
					<img src="H&M.png" alt="H&M">
					<figcaption>
						<h5>H&M</h5>
						<p>blablablablabla blablablalbalbal</p>
					</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="http://henm.be">
				<figure>
					<img src="H&M.png" alt="H&M">
					<figcaption>
						<h5>H&M</h5>
						<p>blablablablabla blablablalbalbal</p>
					</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="http://henm.be">
				<figure>
					<img src="H&M.png" alt="H&M">
					<figcaption>
						<h5>H&M</h5>
						<p>blablablablabla blablablalbalbal</p>
					</figcaption>
				</figure>
			</a>
		</li>
	</ul>
@endsection

@extends('layouts.app')

@section('content')

	<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}

		<div class="{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email">E-Mail Address</label>


				<input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif

		</div>

		<div class="{{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="password">Password</label>


				<input id="password" type="password" name="password" required>

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif

		</div>

		<label>
			<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
		</label>
		<input type="submit" value="Inloggen">
	</form>
@endsection

@extends('master_login', ['title'=>'Wachtwoord Resetten'])

@section('content')
<div class="login_panel">
	
<h2>Wachtwoord Resetten</h2>

<form method="POST" action="{{ url('/password/reset') }}">
	{{ csrf_field() }}

	<input type="hidden" name="token" value="{{ $token }}">

	<div>
		<label>E-mail</label>
		<input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

		@if ($errors->has('email'))
			<span class="help-block">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
		@endif
	</div>

	<div>
		<label>Wachtwoord</label>
		<input type="password" class="form-control" name="password">

		@if ($errors->has('password'))
			<span class="help-block">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif
	</div>

	<div>
		<label>Bevestig wachtwoord</label>
		<input type="password" class="form-control" name="password_confirmation">

		@if ($errors->has('password_confirmation'))
			<span class="help-block">
				<strong>{{ $errors->first('password_confirmation') }}</strong>
			</span>
		@endif

	</div>

	<input type="submit" value="Reset Wachtwoord">
</form>

</div>
@endsection

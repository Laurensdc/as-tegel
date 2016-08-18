@extends('master_login', ['title'=>'Log in'])

@section('content')
<div class="login_panel">
	<h2>Log in</h2>
	<p>
        Heeft u nog geen login?<br>Geen probleem, u kan zich registreren.
        <br>
        <a href="{{ route('home') }}/register">Ik wil me registreren.</a>
    </p>

	<form role="form" method="POST" action="{{ url('/login') }}">
		{{ csrf_field() }}

		<div>
			<label>E-mail</label>
			<input type="email" name="email" value="{{ old('email') }}" autofocus>

			@if ($errors->has('email'))
				<span class="txt_warning">
					{{ $errors->first('email') }}
				</span>
			@endif
		</div>

		<div>
			<label>Wachtwoord</label>
			<input type="password" class="form-control" name="password">

			@if ($errors->has('password'))
				<span class="txt_warning">
					{{ $errors->first('password') }}
				</span>
			@endif
		</div>
		<br>
		<div>
			<label>
				<input type="checkbox" name="remember"> Gegevens onthouden
			</label>
		</div>

		<div>
			<input type="submit" value="Log in"> 
			<a class="boringlink" href="{{ url('/password/reset') }}">Wachtwoord vergeten?</a>
		</div>
	</form>
</div>
@endsection

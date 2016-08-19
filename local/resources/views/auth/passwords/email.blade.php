@extends('master_login', ['title'=>'Wachtwoord Resetten'])

<!-- Main Content -->
@section('content')
<div class="login_panel">
	<h2>Wachtwoord resetten</h2>

	@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif

	<form  method="POST" action="{{ url('/password/email') }}">
		{{ csrf_field() }}

		<div>
			<label class="col-md-4 control-label">E-mail</label>
			<input type="email" name="email" value="{{ old('email') }}">

			@if ($errors->has('email'))
				<span class="txt_warning">
					{{ $errors->first('email') }}
				</span>
			@endif
		</div>

		
		<input type="submit" value="Verstuur Reset Link">
		
	</form>
</div>
@endsection

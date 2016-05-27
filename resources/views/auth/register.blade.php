


@extends('master_login', ['title'=>'Registreer'])

@section('content')


<div class="login_panel">
	<h2>Registreer</h2>
	<form method="POST" action="{{ url('/register') }}">
		{{ csrf_field() }}

		<div>
			<label class="">Voornaam</label>
			<input type="text" name="voornaam" value="{{ old('voornaam') }}">

			@if ($errors->has('voornaam'))
				<span class="txt_warning">
					{{ $errors->first('voornaam') }}
				</span>
			@endif		
		</div>

		<div>
			<label class="">Naam</label>
			<input type="text" name="naam" value="{{ old('naam') }}">

			@if ($errors->has('naam'))
				<span class="txt_warning">
					{{ $errors->first('naam') }}
				</span>
			@endif		
		</div>

		<div>
			<label>E-mailadres</label>
			<input type="email" name="email" value="{{ old('email') }}">

			@if ($errors->has('email'))
				<span class="txt_warning">
					{{ $errors->first('email') }}
				</span>
			@endif
		</div>

		<div>
			<label>Wachtwoord</label>
			<input type="password" name="password">
			@if ($errors->has('password'))
				<span class="txt_warning">
					{{ $errors->first('password') }}
				</span>
			@endif
		</div>

		<div>
			<label>Bevestig Wachtwoord</label>
			<input type="password" name="password_confirmation">

			@if ($errors->has('password_confirmation'))
				<span class="txt_warning">
					{{ $errors->first('password_confirmation') }}
				</span>
			@endif
		</div>

		<div class="login_handelaar">
			<input type="checkbox" name="is_handelaar" id="cbhandelaar">Ik ben een handelaar
			<p id="handelaar_tekst"></p>
		</div>

		<input type="submit" value="Registreer"/>
	</form>
</div>

@endsection

@section('javascript')

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

<script>
	$('#cbhandelaar').on('click', function() {
		if($('#cbhandelaar').prop('checked'))
			$('#handelaar_tekst').html('U dient een aanvraag in om als handelaar geregistreerd te worden.<br>Indien deze aanvraag goedgekeurd wordt krijgt u van ons een bevestiging.');
		else $('#handelaar_tekst').html('');
	});
</script>

@endsection
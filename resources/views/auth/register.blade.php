@extends('master_login', ['title'=>'Registreer'])

@section('content')
<div class="login_panel">
	<h2>Registreer</h2>
	<form role="form" method="POST" action="{{ url('/register') }}" id="registerform">
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
			<label>E-mail</label>
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
			<label>Bevestig wachtwoord</label>
			<input type="password" name="password_confirmation">

			@if ($errors->has('password_confirmation'))
				<span class="txt_warning">
					{{ $errors->first('password_confirmation') }}
				</span>
			@endif
		</div>

		<div>
			<label>Telefoonnummer (optioneel)</label>
			<input type="text" name="tel" value="{{ old('tel') }}" title="Indien u uw telefoonnummer wenst op te geven, kunnen wij u beter van dienst zijn.">

			@if ($errors->has('tel'))
				<span class="txt_warning">
					{{ $errors->first('tel') }}
				</span>
			@endif
		</div>

		<div class="login_handelaar">
			<input type="checkbox" name="is_handelaar" id="cbhandelaar"> Ik ben een handelaar
			<p class="handelaar_tekst" id="handelaar_tekst"></p>
		</div>

        <div class="input_btw">
            <label>BTW Nummer</label>
            <input type="text" name="btw" id="btw" value="BE ">
            <span class="txt_warning" id="btw_errormsg"></span>
        </div>

		<input type="submit" value="Registreer"/>
	</form>
</div>

@endsection

@section('javascript')

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>   
<script src="{{ asset('js/register.js') }}"></script>

@endsection
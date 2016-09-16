@extends('master_login', ['title'=>'Registreer'])

@section('content')
<div class="login_panel">
	<h2>{{ trans('cont.register') }}</h2>
	<form role="form" method="POST" action="{{ url('/register') }}" id="registerform">
		{{ csrf_field() }}

		<div>
			<label class="">{{ trans('auth.firstname') }}</label>
			<input type="text" name="voornaam" value="{{ old('voornaam') }}" autofocus>

			@if ($errors->has('voornaam'))
				<span class="txt_warning">
					{{ $errors->first('voornaam') }}
				</span>
			@endif		
		</div>

		<div>
			<label class="">{{ trans('auth.name') }}</label>
			<input type="text" name="naam" value="{{ old('naam') }}">

			@if ($errors->has('naam'))
				<span class="txt_warning">
					{{ $errors->first('naam') }}
				</span>
			@endif		
		</div>

		<div>
			<label>{{ trans('auth.email') }}</label>
			<input type="email" name="email" value="{{ old('email') }}">

			@if ($errors->has('email'))
				<span class="txt_warning">
					{{ $errors->first('email') }}
				</span>
			@endif
		</div>

		<div>
			<label>{{ trans('auth.password') }}</label>
			<input type="password" name="password">
			@if ($errors->has('password'))
				<span class="txt_warning">
					{{ $errors->first('password') }}
				</span>
			@endif
		</div>

		<div>
			<label>{{ trans('auth.confirmpassword') }}</label>
			<input type="password" name="password_confirmation">

			@if ($errors->has('password_confirmation'))
				<span class="txt_warning">
					{{ $errors->first('password_confirmation') }}
				</span>
			@endif
		</div>

		<div>
			<label>{{ trans('auth.phone') }} ({{ trans('auth.optional') }})</label>
			<input type="text" name="tel" value="{{ old('tel') }}" title="">

			@if ($errors->has('tel'))
				<span class="txt_warning">
					{{ $errors->first('tel') }}
				</span>
			@endif
		</div>

		<div class="login_handelaar">
			<label>{{ trans('auth.areyouwholesale') }}</label>
			<input type="checkbox" name="is_handelaar" id="cbhandelaar"> {{ trans('auth.iamwholesale') }}
			<p class="handelaar_tekst" id="handelaar_tekst"></p>
		</div>

        <div class="input_btw">
            <label>{{ trans('auth.btwnr') }}</label>
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
@extends('master_login', ['title'=>'Log in'])

@section('content')
<div class="login_panel">
	<h2>Log in</h2>
	<p>
        {!! trans('auth.nologin') !!}
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
			<label>{{ trans('auth.password') }}</label>
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
				<input type="checkbox" name="remember"> {{ trans('auth.remember') }}
			</label>
		</div>

		<div>
			<input type="submit" value="{{ trans('cont.login') }}"> 
			<a class="boringlink" href="{{ url('/password/reset') }}">{{ trans('auth.forgotpass') }}</a>
		</div>
	</form>
</div>
@endsection

@extends('admin.master', ['admin_menu' => 'fotoupload'])

@section('content')

	<div class="admin_smallcol">
		{!! Form::open(array('url' => route('admin') . '/fotoupload', 'method' => 'post', 'files' => true)) !!}
			{{ csrf_field() }}
			<p>
				<label>Map voor foto</label>
				<input type="text" name="coverfoto" value="images/cover/" size="40">
			</p>
			<p>
				<label>Foto</label>
				<input type="file" name="foto" methode="post">
			</p>			
			<p>
				<label></label>
				<input type="submit" value="Foto Uploaden"> <a href="{{ route('admin') }}" class="boringlink">Annuleren</a>
			</p>
		</form>

		@if($success == 'true')
			<p>Upload succesvol. Volle naam foto:</p>
			<p>{{ $msg }}</p>

		@else {{ $msg }}

		@endif

	</div>


@endsection


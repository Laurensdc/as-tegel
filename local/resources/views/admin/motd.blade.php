@extends('admin.master', ['admin_menu' => 'motd'])

@section('content')

	<div class="admin_smallcol">
		{!! Form::open(array('url' => route('admin') . '/motd', 'method' => 'post', 'files' => true)) !!}
			{{ csrf_field() }}

			<p>
				<label>Message of the day:</label>
				<textarea name="motd" rows="6" cols="50">{{ $motd->content }}</textarea>
			</p>


			<p>
				<label></label>
				<input type="submit" value="MOTD aanpassen"> <a href="{{ route('admin') }}" class="boringlink">Annuleren</a>
			</p>
		</form>
	</div>


@endsection

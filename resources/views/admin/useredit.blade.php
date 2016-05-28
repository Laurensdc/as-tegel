@extends('admin.master')


@section('content')

	
	<div class="admin_smallcol">
		<form action="{{ route('admin') }}/users/{{ $user->id }}" method="post">			{{ csrf_field() }}

			<p>
				<label>Naam</label>
				<input type="text" name="lastname" value="{{ $user->lastname }}">
			</p>
			<p>
				<label>Voornaam</label>
				<input type="text" name="firstname" value="{{ $user->firstname }}">
			</p>
			<p>
				<label>E-mail</label>
				<input type="text" name="email" value="{{ $user->email }}">
			</p>
			<p>
				<label>Telefoonnr</label>
				<input type="text" name="telnr" value="{{ $user->telnr }}">
			</p>
			<p>
				<label>Rol</label>
				<select name="role">
					<option value="particulier" @if($user->role=='particulier')selected @endif>Particulier</option>
					<option value="handelaar" @if($user->role=='handelaar')selected @endif>Handelaar</option>
					<option value="admin" disabled @if($user->role=='admin')selected @endif>Admin</option>
				</select>
			</p>
			<p>
				<input type="submit" value="Aanpassen"> <a href="{{ route('admin') }}/users" class="boringlink">Annuleren</a>
			</p>
		</form>
	</div>


@endsection


@extends('admin.master', ['admin_menu' => 'gebruikers'])

@section('content')

	<div class="admin_smallcol">
		<form action="{{ route('admin') }}/users/{{ $user->id }}" method="post">
			{{ csrf_field() }}

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
				<label>BTW-nummer</label>
				<input type="text" name="btw" value="{{ $user->btwnr }}">
			</p>
			<p>
				<label></label>
				<input type="submit" value="Aanpassen"> <a href="{{ route('admin') }}/users" class="boringlink">Annuleren</a>
			</p>
		</form>
	</div>

	<div class="admin_smallcol">
				<span id="for_admin_delete"class="txt_warning">Verwijderen</span>
				<a class="admin_delete btn" href="{{ route('admin' )}}/users/delete/{{ $user->id}}">Bevestig Verwijdering {{ $user->firstname }} {{ $user->lastname }}</a>
	</div>	
@endsection

@section('javascript') 
	<script src="{{ asset('js/adminscripts.js') }}"></script>
@endsection


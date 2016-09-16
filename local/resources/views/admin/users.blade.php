@extends('admin.master', ['admin_menu' => 'gebruikers'])

@section('content')

	<table>
		<tr>
			<td><strong>Naam</strong></td>
			<td><strong>E-mail</strong></td>
			<td><strong>Telefoonnummer</strong></td>
			<td><strong>Rol</strong></td>
			<td><strong>BTW</strong></td>
			<td></td>
		</tr>
	@foreach($users as $user)
		<tr>
			<td>{{ $user->lastname }} {{ $user->firstname }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->telnr }}</td>
			<td>{{ $user->role }}</td>
			<td>{{ $user->btwnr }}</td>
			<td><a class="btn" href="{{ route('admin') }}/users/{{ $user->id }}">Gebruiker bewerken</a></td>
		</tr>
	@endforeach
	</table>

@endsection


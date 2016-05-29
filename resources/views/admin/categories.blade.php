@extends('admin.master', ['admin_menu' => 'categorie'])

@section('content')
	<div class="admin_smallcol">
		<h2>Toevoegen</h2>
		<p><a class="boringlink" href="{{ route('admin') }}/categorie/add">Categorie toevoegen</a></p>
	</div>

	<table>
		<tr>
			<td><strong>Naam</strong></td>
			<td><strong>Linknaam</strong></td>
			<td><strong>Coverfoto</strong></td>
			<td></td>
		</tr>
	@foreach($categories as $c)
		<tr>
			<td>{{ $c->naam }}</td>
			<td>{{ $c->cat_linknaam }}</td>
			<td>{{ $c->coverfoto }}</td>
			<td><a class="btn" href="{{ route('admin') }}/categorie/edit/{{ $c->id }}">Categorie bewerken</a></td>
		</tr>
	@endforeach
	</table>

@endsection


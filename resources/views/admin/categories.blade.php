@extends('admin.master', ['admin_menu' => 'categorie'])

@section('content')
	<div class="admin_smallcol">
		<h2>Toevoegen</h2>
		<p><a href="{{ route('admin') }}/categorie/add"><span class="icon-plus"></span> Categorie toevoegen</a></p>
	</div>

	<table>
		<tr>
			<td><strong>Naam</strong></td>
			<td><strong>Linknaam</strong></td>
			<td><strong>Coverfoto</strong></td>
            <td><strong>Volgorde in menu</strong></td>
			<td></td>
		</tr>
	@foreach($categories as $c)
		<tr>
			<td><a class="boringlink" href="{{ route('admin') }}/categorie/edit/{{ $c->id }}">{{ $c->naam }}</a></td>
			<td>{{ $c->cat_linknaam }}</td>
			<td>{{ $c->coverfoto }}</td>
            <td>{{ $c->volgorde }}</td>
			<td><a class="btn" href="{{ route('admin') }}/categorie/edit/{{ $c->id }}">Bewerken</a></td>
		</tr>
	@endforeach
	</table>

@endsection


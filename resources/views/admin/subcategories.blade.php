@extends('admin.master')

@section('content')
	<div class="admin_smallcol">
		<h2>Toevoegen</h2>
		<p><a class="boringlink" href="{{ route('admin') }}/subcategorie/add">Subcategorie toevoegen</a></p>
	</div>

	<table>
		<tr>
			<td><strong>Naam</strong></td>
			<td><strong>Linknaam</strong></td>
			<td><strong>Behoort tot Categorie</strong></td>
			<td><strong>Coverfoto</strong></td>
			<td></td>
		</tr>
	@foreach($subcategories as $s)
		<tr>
			<td>{{ $s->naam }}</td>
			<td>{{ $s->subcat_linknaam }}</td>
			<td>{{ $s->categorie->naam }}</td>
			<td>{{ $s->coverfoto }}</td>
			<td><a class="btn" href="{{ route('admin') }}/subcategorie/edit/{{ $s->id }}">Subcategorie bewerken</a></td>
		</tr>
	@endforeach
	</table>

@endsection


@extends('admin.master', ['admin_menu' => 'subcategorie'])

@section('content')
	<div class="admin_smallcol">
		<h2>Toevoegen</h2>
		<p><a href="{{ route('admin') }}/subcategorie/add"><span class="icon-plus"></span> Subcategorie toevoegen</a></p>
	</div>

	<table>
		<tr>
			<td><strong>Naam</strong></td>
			<td><strong>Linknaam</strong></td>
			<td><strong>< Categorie</strong></td>
			<td><strong>Beschrijving</strong></td>
			<td></td>
		</tr>
	@foreach($subcategories as $s)
		<tr>
			<td><a class="boringlink" href="{{ route('admin') }}/subcategorie/edit/{{ $s->id }}">{{ $s->naam }}</a></td>
			<td>{{ $s->subcat_linknaam }}</td>
			<td>{{ $s->categorie->naam }}</td>
			<td>{{ substr($s->beschrijving, 0, 25) }}@if($s->beschrijving != '')...@endif</td>
			<td><a class="btn" href="{{ route('admin') }}/subcategorie/edit/{{ $s->id }}">Bewerken</a></td>
		</tr>
	@endforeach
	</table>

@endsection


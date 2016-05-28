@extends('admin.master')

@section('content')

	<table>
		<tr>
			<td>{{ $p->naam }}</td>
			<td>{{ $p->afmetingen }}</td>
			<td>{{ $p->prijs_particulier }}</td>
			<td>{{ $p->prijs_handelaar }}</td>
			<td>{{ $p->invoorraad }}</td>
			<td>{{ $p->beschrijving }}</td>
			<td>{{ $p->coverfoto }}</td>
			<td>{{ $p->subcategorie->categorie->naam}} / {{ $p->subcategorie->naam }}</td>
		
		</tr>

	</table>

	<div class="admin_center">
		<a href="#" class="btn">Aanpassen</a> <a href="{{ route('admin_productoverview') }}" class="boringlink">Terug naar overzicht</a>
	</div>

@endsection

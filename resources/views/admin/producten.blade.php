@extends('admin.master')

@section('hugecontent')
	<div class="admin_smallcol">
		<h2>Sorteren</h2>	
		<p>
			<a class="boringlink" href="{{ route('admin') }}/producten/sort/naam">Naam</a> - 
			<a class="boringlink" href="{{ route('admin') }}/producten/sort/prijs_particulier">Particuliere prijs</a>	 - 
			<a class="boringlink" href="{{ route('admin') }}/producten/sort/prijs_handelaar">Handelaarsprijs</a> - 
			<a class="boringlink" href="{{ route('admin') }}/producten/sort/invoorraad">In voorraad</a> - 
			<a class="boringlink" href="{{ route('admin') }}/producten/sort/subcategorie_id">Categorie</a>
		</p>

		<h2>Toevoegen</h2>
		<p>
			<a class="boringlink" href="{{ route('admin') }}/producten/add">Product toevoegen</a>
		</p>
	</div>

	<table>
		<tr>
			<td><strong>Naam</strong></td>
			<td><strong>Afmetingen</strong></td>
			<td><strong>Prijs Particulier</strong></td>
			<td><strong>Prijs Handelaar</strong></td>
			<td><strong>In voorraad</strong></td>
			<td><strong>Categorie</strong></td>
			<td><strong>Beschrijving</strong></td>
			<td><strong>Foto</strong></td>
			<td></td>
		</tr>
	@foreach($producten as $p) 
		<tr>
			<td>{{ $p->naam }}</td>
			<td>{{ $p->afmetingen }}</td>
			<td>{{ $p->prijs_particulier }}</td>
			<td>{{ $p->prijs_handelaar }}</td>
			<td>{{ $p->invoorraad }}</td>
			<td>{{ $p->subcategorie->naam }}</td>
			<td>{{ substr($p->beschrijving, 0, 25) }}@if($p->beschrijving != '')...@endif</td>
			<td>...{{ substr($p->coverfoto, sizeof($p->coverfoto)-25) }}</td>
			<td><a href="{{ route('admin_productoverview')}}/edit/{{ $p->id }}" class="btn">Bewerken</a></td>
		</tr>
	@endforeach

	</table>

@endsection

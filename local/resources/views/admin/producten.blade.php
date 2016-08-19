@extends('admin.master', ['admin_menu' => 'producten'])

@section('hugecontent')
	<div class="admin_smallcol">
		<h2>Sorteren</h2>	
		<p>
			<a href="{{ route('admin') }}/producten/sort/naam">Naam</a> -  
			<a href="{{ route('admin') }}/producten/sort/prijs_handelaar">Handelaarsprijs</a> - 
			<a href="{{ route('admin') }}/producten/sort/invoorraad">In voorraad</a> -
            <a href="{{ route('admin') }}/producten/sort/inpromo">Promo</a> -  
			<a href="{{ route('admin') }}/producten/sort/subcategorie_id">Subcategorie</a>
		</p>

		<h2>Toevoegen</h2>
		<p>
			<a href="{{ route('admin') }}/producten/add"><span class="icon-plus"></span> Product toevoegen</a>
		</p>
	</div>

	<table>
		<tr>
			<td><strong>Naam</strong></td>
			<td><strong>Afmetingen</strong></td>
			<td><strong>Prijs Handelaar</strong></td>
			<td><strong>In voorraad</strong></td>
            <td><strong>Promo</strong></td>
            <td><strong>Groep</strong></td>
			<td><strong>< Subcategorie</strong></td>
			<td><strong>Beschrijving</strong></td>
			<td><strong>Foto</strong></td>
			<td></td>
		</tr>
	@foreach($producten as $p) 
		<tr>
			<td><a href="{{ route('admin_productoverview')}}/edit/{{ $p->id }}" class="boringlink">{{ $p->naam }}</a></td>
			<td>{{ $p->afmetingen }}</td>
			<td>{{ $p->prijs_handelaar }}</td>
			<td>{{ $p->invoorraad }}</td>
            <td>{{ $p->inpromo }}</td>
            <td>{{ $p->groepering }}</td>
			<td>{{ $p->subcategorie->naam }}</td>
			<td>{{ substr($p->beschrijving, 0, 25) }}@if($p->beschrijving != '')...@endif</td>
			<td>...{{ substr($p->coverfoto, sizeof($p->coverfoto)-25) }}</td>
			<td><a href="{{ route('admin_productoverview')}}/edit/{{ $p->id }}" class="btn">Bewerken</a></td>
		</tr>
	@endforeach

	</table>

@endsection

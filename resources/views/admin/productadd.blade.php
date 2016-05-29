@extends('admin.master')

@section('content')
	<div class="admin_smallcol">
		<form action="{{ route('admin') }}/producten/add" method="post">
			{{ csrf_field() }}

			<p>
				<label>Naam</label>
				<input type="text" name="naam">
			</p>
			<p>
				<label>Afmetingen</label>
				<input type="text" name="afmetingen">
			</p>
			<p>
				<label>Prijs Particulier</label>
				<input type="text" name="prijs_particulier">
			</p>
			<p>
				<label>Prijs Handelaar</label>
				<input type="text" name="prijs_handelaar">
			</p>
			<p>
				<label>Is product in voorraad?</label>
				<select name="invoorraad">					
					<option value="1">Ja</option>
					<option value="0">Nee</option>
				</select>
			</p>
			<p>
				<label>Behoort tot subcategorie</label>
				<select name="subcategorie_id">
					@foreach($subcategories as $s)
						<option value="{{ $s->id }}">
							{{ $s->categorie->naam }} => {{ $s->naam }}
						</option>
					@endforeach
				</select>
			</p>	
			<p>
				<label>Beschrijving</label>
				<textarea name="beschrijving" rows="3" cols="40"></textarea>
			</p>
			<p>
				<label>Foto</label>
				<input type="text" name="foto" size="40" value="images/producten/_geenfoto.jpg">
			</p>	
			<label></label>
			<input type="submit" value ="Aanpassen"> <a href="{{ route('admin_productoverview') }}" class="boringlink">Annuleren</a>
		</form>
	</div>



@endsection

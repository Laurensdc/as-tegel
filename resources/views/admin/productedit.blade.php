@extends('admin.master', ['admin_menu' => 'producten'])

@section('content')
	<div class="admin_smallcol">
		{!! Form::open(array('url' => route('admin') . '/producten/edit/' . $p->id, 'method' => 'post', 'files' => true)) !!}
			{{ csrf_field() }}

			<p>
				<label>Naam</label>
				<input type="text" name="naam" value="{{ $p->naam }}">
			</p>
			<p>
				<label>Afmetingen</label>
				<input type="text" name="afmetingen" value="{{ $p->afmetingen }}">
			</p>
			<p>
				<label>Prijs Particulier</label>
				<input type="text" name="prijs_particulier" value="{{ $p->prijs_particulier }}">
			</p>
			<p>
				<label>Prijs Handelaar</label>
				<input type="text" name="prijs_handelaar" value="{{ $p->prijs_handelaar }}">
			</p>
			<p>
				<label>Is product in voorraad?</label>
				<select name="invoorraad">					
					<option value="1" @if($p->invoorraad)selected @endif>Ja</option>
					<option value="0" @if(!$p->invoorraad)selected @endif>Nee</option>
				</select>
			</p>
			<p>
				<label>Behoort tot subcategorie</label>
				<select name="subcategorie_id">
					@foreach($subcategories as $s)
						<option value="{{ $s->id }}" @if($s->id == $p->subcategorie_id)selected @endif>
							{{ $s->categorie->naam }} => {{ $s->naam }}
						</option>
					@endforeach
				</select>
			</p>	
			<p>
				<label>Beschrijving</label>
				<textarea name="beschrijving" rows="3" cols="40">{{ $p->beschrijving }}</textarea>
			</p>
			<p>
				<label>Map voor foto</label>
				<input type="text" name="coverfoto" value="{{ $p->coverfoto }}" size="40">
			</p>
			<p>
				<label>Foto</label>
				<input type="file" name="foto" methode="post">
			</p>

			<label></label>
			<input type="submit" value ="Aanpassen"> <a href="{{ route('admin_productoverview') }}" class="boringlink">Annuleren</a>
		</form>
	</div>

	<div class="admin_smallcol">
				<span id="for_admin_delete"class="txt_warning">Verwijderen</span>
				<a class="admin_delete btn" href="{{ route('admin' )}}/producten/delete/{{ $p->id}}">Bevestig Verwijdering {{ $p->naam }}</a>
	</div>	
@endsection

@section('javascript') 
	<script src="{{ asset('js/adminscripts.js') }}"></script>
@endsection




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
				<label>Prijs Handelaar</label>
				<input type="text" name="prijs_handelaar" value="{{ $p->prijs_handelaar }}">
			</p>
            <p>
                <label>Eenheid</label>
                <select name="eenheid">
                    <option value="m&sup2;" @if($p->eenheid == 'm&sup2;') selected @endif >m&sup2;</option>
                    <option value="stuk" @if($p->eenheid == 'stuk') selected @endif >stuk</option>
                    <option value="lot" @if($p->eenheid == 'lot') selected @endif >lot</option>
                    <option value="ton" @if($p->eenheid == 'ton') selected @endif >ton</option>
                    <option value="dag" @if($p->eenheid == 'dag') selected @endif >dag</option>
                    <option value="week" @if($p->eenheid == 'week') selected @endif >week</option>
                </select>
            </p>
			<p>
				<label>Is product in voorraad?</label>
				<select name="invoorraad">					
					<option value="1" @if($p->invoorraad) selected @endif >Ja</option>
					<option value="0" @if(!$p->invoorraad) selected @endif >Nee</option>
				</select>
			</p>
			<p>
				<label>Promo op voorpagina?</label>
				<select name="inpromo">					
					<option value="0" @if(!$p->inpromo) selected @endif >Nee</option>
					<option value="1" @if($p->inpromo) selected @endif >Ja</option>
				</select>
			</p>
            <p>
                <label>Groeperingsnummer</label>
                <input type="number" name="groepering" value="{{ $p->groepering }}" max="999">
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
				<label>Map voor foto <span class="txt_warning">moet eindigen met '/' bij upload nieuwe foto!</span></label>
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
				<span id="for_admin_delete"class="txt_warning"><span class="icon-trash-empty"></span> Verwijderen</span>
				<a class="admin_delete btn" href="{{ route('admin' )}}/producten/delete/{{ $p->id}}">Bevestig verwijdering {{ $p->naam }}</a>
	</div>	
@endsection

@section('javascript') 
	<script src="{{ asset('js/adminscripts.js') }}"></script>
@endsection




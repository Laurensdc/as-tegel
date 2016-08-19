@extends('admin.master', ['admin_menu' => 'subcategorie'])

@section('content')

	<div class="admin_smallcol">
		<form action="{{ route('admin') }}/subcategorie/edit/{{ $subcat->id }}" method="post">
			{{ csrf_field() }}

			<p>
				<label>Naam</label>
				<input type="text" name="naam" value="{{ $subcat->naam }}">
			</p>
			<p>
				<label>Linknaam</label>				
				<input type="text" name="subcat_linknaam" value="{{ $subcat->subcat_linknaam }}">
			</p>		
			@if ($errors->has('subcat_linknaam'))
				<p class="txt_warning"><label></label> Kleine letters, geen spaties, niet leeg, moet uniek zijn</p>
			@endif	

			<p>
				<label>Behoort tot categorie</label>
				<select name="categorie_id">
					@foreach($categories as $cat)
						<option value="{{ $cat->id }}" @if($cat->id == $subcat->categorie_id) selected @endif>{{ $cat->naam }}</option>
					@endforeach
				</select>
			</p>
			<p>
				<label>Beschrijving</label>
                <textarea name="beschrijving" rows="3" cols="40">{{ $subcat->beschrijving }}</textarea>
			</p>

			<p>
				<label></label>
				<input type="submit" value="Aanpassen"> <a href="{{ route('admin') }}/subcategorie" class="boringlink">Annuleren</a>
			</p>
		</form>
	</div>

	<div class="admin_smallcol">
				<span id="for_admin_delete"class="txt_warning"><span class="icon-trash-empty"></span> Verwijderen</span>
				<a class="admin_delete btn" href="{{ route('admin' )}}/subcategorie/delete/{{ $subcat->id}}">Bevestig verwijdering {{ $subcat->naam }}</a>
	</div>	
@endsection

@section('javascript') 
	<script src="{{ asset('js/adminscripts.js') }}"></script>
@endsection




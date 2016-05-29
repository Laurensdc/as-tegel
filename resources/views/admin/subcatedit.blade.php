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
				<p class="txt_warning"><label></label> Kleine letters, geen spaties, moet uniek zijn</p>
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
				<label>Coverfoto</label>
				<input type="text" name="coverfoto" size="40" value="{{ $subcat->coverfoto }}">
			</p>
			<p>
				<label></label>
				<input type="submit" value="Aanpassen"> <a href="{{ route('admin') }}/subcategorie" class="boringlink">Annuleren</a>
			</p>
		</form>
	</div>

@endsection


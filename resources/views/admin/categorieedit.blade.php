@extends('admin.master')


@section('content')

	<div class="admin_smallcol">
		<form action="{{ route('admin') }}/categorie/edit/{{ $categorie->id }}" method="post">
			{{ csrf_field() }}

			<p>
				<label>Naam</label>
				<input type="text" name="naam" value="{{ $categorie->naam }}">
			</p>
			<p>
				<label>Linknaam</label>				
				<input type="text" name="cat_linknaam" value="{{ $categorie->cat_linknaam }}">
			</p>		
			@if ($errors->has('cat_linknaam'))
				<p class="txt_warning"><label></label> Kleine letters, geen spaties, moet uniek zijn</p>
			@endif	
			<p>
				<label>Coverfoto</label>
				<input type="text" name="coverfoto" value="{{ $categorie->coverfoto }}">
			</p>
			<p>
				<label></label>
				<input type="submit" value="Aanpassen"> <a href="{{ route('admin') }}/categorie" class="boringlink">Annuleren</a>
			</p>
		</form>
	</div>

@endsection


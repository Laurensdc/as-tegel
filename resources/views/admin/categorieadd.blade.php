@extends('admin.master')

@section('content')

	<div class="admin_smallcol">
		<form action="{{ route('admin') }}/categorie/add" method="post">
			{{ csrf_field() }}

			<p>
				<label>Naam</label>
				<input type="text" name="naam">
			</p>
			<p>
				<label>Linknaam</label>				
				<input type="text" name="cat_linknaam">
			</p>		
			@if ($errors->has('cat_linknaam'))
				<p class="txt_warning"><label></label> Kleine letters, geen spaties, moet uniek zijn</p>
			@endif	
			<p>
				<label>Coverfoto</label>
				<input type="text" name="coverfoto" value="images/cover/_geenfoto.jpg" size="40">
			</p>
			<p>
				<label></label>
				<input type="submit" value="Categorie Aanmaken"> <a href="{{ route('admin') }}/categorie/add" class="boringlink">Annuleren</a>
			</p>
		</form>
	</div>


@endsection


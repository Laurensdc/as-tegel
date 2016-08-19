@extends('admin.master', ['admin_menu' => 'categorie'])

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
				<p class="txt_warning"><label></label> Kleine letters, geen spaties, niet leeg, moet uniek zijn</p>
			@endif	
			<p>
				<label>Coverfoto</label>
				<input type="text" name="coverfoto" value="{{ $categorie->coverfoto }}">
			</p>
            <p>
				<label>Volgorde in menu (optioneel)</label>
                <input type="number" max="99" name="volgorde" value="{{ $categorie->volgorde }}">
            </p>
            @if ($errors->has('volgorde'))
                <p class="txt_warning"><label></label>Moet uniek zijn (of leeg laten)</p>
            @endif

			<p>
				<label></label>
				<input type="submit" value="Aanpassen"> <a href="{{ route('admin') }}/categorie" class="boringlink">Annuleren</a>
			</p>

		</form>
	</div>

	<div class="admin_smallcol">
				<span id="for_admin_delete"class="txt_warning"><span class="icon-trash-empty"></span> Verwijderen</span>
				<a class="admin_delete btn" href="{{ route('admin' )}}/categorie/delete/{{ $categorie->id}}">Bevestig verwijdering {{ $categorie->naam }}</a>	
	</div>	
@endsection

@section('javascript') 
	<script src="{{ asset('js/adminscripts.js') }}"></script>
@endsection




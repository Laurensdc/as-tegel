@extends('admin.master', ['admin_menu' => 'categorie'])

@section('content')

	<div class="admin_smallcol">
		{!! Form::open(array('url' => route('admin') . '/categorie/add', 'method' => 'post', 'files' => true)) !!}
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
				<p class="txt_warning"><label></label> Kleine letters, geen spaties, niet leeg, moet uniek zijn</p>
			@endif	
			<p>
				<label>Map voor foto</label>
				<input type="text" name="coverfoto" value="images/cover/" size="40">
			</p>
			<p>
				<label>Foto</label>
				<input type="file" name="foto" methode="post">
			</p>	
            <p>
				<label>Volgorde in menu (optioneel)</label>
                <input type="number" max="99" name="volgorde">
            </p>
            @if ($errors->has('volgorde'))
                <p class="txt_warning"><label></label>Moet uniek zijn of niet ingevuld</p>
            @endif

			<p>
				<label></label>
				<input type="submit" value="Categorie Aanmaken"> <a href="{{ route('admin') }}/categorie/add" class="boringlink">Annuleren</a>
			</p>
		</form>
	</div>


@endsection


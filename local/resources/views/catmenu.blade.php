<ul class="catmenu">
	<li class="catmenu_title">{{ trans('cont.cat_overview') }}</li>
	@foreach($allcategories as $cat)
		<li @if($catmenu_active === $cat->cat_linknaam) class="active" @endif >
			<a href="#{{ $cat->cat_linknaam }}">{{ $cat->naam }}</a>
		</li>
		<ul>
		@foreach($allsubcategories as $subcat) 
			@if($subcat->categorie_id == $cat->id)
				<li @if(isset($subcategorie)) @if($subcat->naam == $subcategorie) class="active" @endif @endif >
                    <a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}/{{ $subcat->subcat_linknaam }}" class="subcat-link">{{ $subcat->naam }}</a>
                    
                </li>
			@endif

		@endforeach
		</ul>
	@endforeach
</ul>

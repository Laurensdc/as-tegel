<ul class="catmenu">
	<li class="catmenu_title">{{ trans('cont.cat_overview') }}</li>
	@foreach($allcategories as $cat)
		<li @if($catmenu_active === $cat->cat_linknaam) class="active" @endif >
			<a href="#" onclick="event.preventDefault()">{{ $cat->naam }}</a>
		</li>
		<ul>
		@foreach($allsubcategories as $subcat) 

			@if($subcat->categorie_id === $cat->id)

				<li><a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}/{{ $subcat->subcat_linknaam }}">{{ $subcat->naam }}</a></li>
			@endif

		@endforeach
		</ul>
	@endforeach
</ul>

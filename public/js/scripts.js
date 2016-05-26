$(document).ready(function () {
	$('.catmenu ul.active').show();
});

$('.catmenu li').on('click', function() {
	$('.catmenu ul').hide(200);

	$(this).next().show(300);
});
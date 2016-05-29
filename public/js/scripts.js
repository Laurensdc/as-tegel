$(document).ready(function () {
	$('.catmenu li.active').next().show();
});

$('.catmenu li').on('click', function(e) {
	$('.catmenu ul').hide(200);
	$(this).next().show(300);
});


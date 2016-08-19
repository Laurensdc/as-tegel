$(document).ready(function () {
	$('.catmenu li.active').next().show();
});

$('.catmenu li').on('click', function(e) {
    // If main category is clicked, hide current submenu
    if(!$(e.target).hasClass("subcat-link")) {
	    $('.catmenu ul').hide(200);
    }
	$(this).next().show(300);
});

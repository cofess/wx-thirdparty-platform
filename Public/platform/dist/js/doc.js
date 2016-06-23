/**
 * smoke config
 */
$(function () {
	$('#fullscreen').smkFullscreen();
	$(".smkPanel").smkPanel({hide: 'remove'});
	$(".smkPanel-min").smkPanel({hide: 'remove,full'});
	$(".smkPanel-full").smkPanel();
});
/**
 * pace
 */
$(document).ajaxStart(function() { Pace.restart(); }); 
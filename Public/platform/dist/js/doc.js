(function ($) {
	//pace preload
	$(document).ajaxStart(function() { Pace.restart(); }); 
	
	//smoke config
	$('#fullscreen').smkFullscreen();
	$(".smkPanel").smkPanel({hide: 'remove'});
	$(".smkPanel-min").smkPanel({hide: 'remove,full'});
	$(".smkPanel-full").smkPanel();

	//Make the dashboard widgets sortable Using jquery UI
  	// $(".connectedSortable").sortable({
   //  	placeholder: "sort-highlight",
   //  	connectWith: ".connectedSortable",
   //  	handle: ".sortable-handle",
   //  	forcePlaceholderSize: true,
   //  	zIndex: 999999
  	// });
  	// $(".connectedSortable .sortable-content").css("cursor", "move");

  	//jQuery UI sortable for the todo list
  	// $(".todo-list").sortable({
   //  	placeholder: "sort-highlight",
   //  	handle: ".handle",
   //  	forcePlaceholderSize: true,
   //  	zIndex: 999999
  	// });
})(jQuery);
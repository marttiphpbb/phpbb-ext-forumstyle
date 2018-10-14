;(function($, window, document) {
	$('document').ready(function(){
		var $span = $('span.marttiphpbb-forumstyle');
		$span.each(function(){
			var forum_id = $(this).data('forum-id');
			$(this).parent('li.row').addClass('forum-' + forum_id);
		});
	});
})(jQuery, window, document);

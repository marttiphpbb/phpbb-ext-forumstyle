;(function($, window, document) {
	$('document').ready(function(){
		var $span = $('span.marttiphpbb-forumstyle');
		$span.each(function(){
			var forum_id = $(this).data('forum-id');
			$(this).parent().parent().parent('div.search.post').addClass('forum-' + forum_id);

		});
	});
})(jQuery, window, document);

$(document).ready(function() {
	$('placeholder').replaceWith(function() {
		return $('<img/>', {
			'id': $(this).attr('id'),
			'class': $(this).attr('class'),
			'src': $(this).attr('src'),
			'alt': $(this).attr('alt')
		});
	});
});

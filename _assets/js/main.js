jQuery(document).ready(function($) {
	$('#footer').on('shown', function () {
		$('#moreButton').html('Less about me');
	});
	$('#footer').on('hidden', function () {
		$('#moreButton').html('More about me');
	});
});
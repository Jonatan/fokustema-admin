jQuery(document).ready(function() {
	jQuery('#widgets-right .sidebar-name h3').each( function(i) {
		var name = jQuery.trim(jQuery(this).text().toLowerCase());	
		jQuery(this).parent().parent().attr('id',name);
	});
});
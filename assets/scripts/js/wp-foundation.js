/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {
	
    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
		if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
		  jQuery(this).wrap("<div class='widescreen responsive-embed'/>");
		} else {
		  jQuery(this).wrap("<div class='responsive-embed'/>");
		}
	});
	
	console.log('Script file ready.');
	
	jQuery('#hamburger').on('click', function(){
  	jQuery(this).toggleClass('is-active');
  	jQuery('#mainnav').toggle(200);
	});
	
	jQuery(document).on('click', function(){
  	console.log(jQuery(this).attr('id'));
	})
}); 
(function($) {

  /*
  * Hamburger Menus for mobile (https://jonsuh.com/hamburgers/)
  */
  jQuery('#hamburger').on('click', function(){
    jQuery(this).toggleClass('is-active');
    jQuery('#mainnav').toggle(200);
  });
 
  // Letter Editor Reset
  var $lettercontent = $('#letterbox').html();
  $('#letterreset').on('click', function(){
    $('#letterbox').html($lettercontent);
  });

  // Copy to Clipboard Function
  var clipboard = new ClipboardJS('#copytxt');
  clipboard.on('success', function(e) {
    var message = '<i class="fal fa-clipboard-check"></i> Success!';
    $('#copyfunc').html(message).show().delay(1000).fadeOut(1000);
  });

  // Show Gov't Lookup Form
  $('#govlookup').on('click', function(){
    $('#lookupform').fadeToggle(200);
  });

  // Print Document Function
  $('#printtxt').on('click', function(){
    window.print();
  });



})(jQuery);

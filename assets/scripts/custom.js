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

  // Remove "hide-on-print" element on focus
  $('.hide-on-print > span').on('click', function(){
    $(this).parent().remove();
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

  // Smooth Scroll
  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]')
    .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        event.preventDefault();

        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

})(jQuery);

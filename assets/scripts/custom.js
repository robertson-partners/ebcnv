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
  $('#letterbox').on('click', '.hide-on-print > span', function(){
    $(this).parent().remove();
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


// reCaptcha-Callback
var onloadCallback = function() {
  var w1 = grecaptcha.render('g-recaptcha', {
    'sitekey' : '6LfdfHcUAAAAAPVHFiOjcJvvIIh5CutjF-zAtyZC',
    'callback' : correctCaptcha,
    'expired-callback' : resetCaptcha
  });
};
var correctCaptcha = function(response) {
  jQuery('#gkey').val(response);
  jQuery('#ltr_submit').addClass('active').removeClass('inactive').data('state', 'active');
};
var resetCaptcha = function(response) {
  jQuery('#gkey').val('');
  jQuery('#ltr_submit').addClass('inactive').removeClass('active').data('state', 'inactive');
};
(function($) {

  // Form Submitter 
  $('#ltr_submit').on('click', function(){
    $btnState = $(this).data('state');
    
    if($btnState === 'active'){
      
      $formData = $('#ltr-sender').serialize();

      console.log($formData);

      $.ajax({
        url : letterpost.ajax_url,
        type : 'post',
        data : {
          action : 'letter_sender',
          response: ''
        },
        success : function( response ) {
          console.log(response);
        }
      });

    }
  });

})(jQuery);
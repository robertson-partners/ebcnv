(function($) {

  function strip(html){    
    var returnText = "" + html;

    //-- Remove all SPAN tags first
    returnText=returnText.replace(/<span.*?>/gi, "");
    returnText=returnText.replace(/<\/span>/gi, "");

    //-- remove BR tags and replace them with line break
    returnText=returnText.replace(/<br>/gi, "\n");
    returnText=returnText.replace(/<br\s\/>/gi, "\n");
    returnText=returnText.replace(/<br\/>/gi, "\n");

    //-- remove P and A tags but preserve what's inside of them
    returnText=returnText.replace(/<p.*?>/gi, "\n");
    returnText=returnText.replace(/<\/p>/gi, "\n");
    returnText=returnText.replace(/<a.*href="(.*?)".*>(.*?)<\/a>/gi, " $2 ($1)");

    //-- remove all inside SCRIPT and STYLE tags
    returnText=returnText.replace(/<script.*>[\w\W]{1,}(.*?)[\w\W]{1,}<\/script>/gi, "");
    returnText=returnText.replace(/<style.*>[\w\W]{1,}(.*?)[\w\W]{1,}<\/style>/gi, "");
    //-- remove all else
    //returnText=returnText.replace(/<(?:.|\s)*?>/g, "");

    //-- get rid of more than 2 multiple line breaks:
    returnText=returnText.replace(/(?:(?:\r\n|\r|\n)\s*){2,}/gim, "\n\n");

    //-- get rid of more than 2 spaces:
    returnText = returnText.replace(/ +(?= )/g,'');

    //-- get rid of html-encoded characters:
    returnText=returnText.replace(/&nbsp;/gi," ");
    returnText=returnText.replace(/&amp;/gi,"&");
    returnText=returnText.replace(/&quot;/gi,'"');
    returnText=returnText.replace(/&lt;/gi,'<');
    returnText=returnText.replace(/&gt;/gi,'>');

    return returnText;
  }

  // Form Submitter 
  $('#ltr_submit').on('click', function(){
    $btnState = $(this).data('state');
    
    if($btnState === 'active'){

      $gkey = $('#gkey').val();
      $letter = strip($('#letter-content-text').val());
      $fname = strip($('#fname_letter').val());
      $lname = strip($('#lname_letter').val());
      $email = strip($('#email_letter').val());

      //console.log('GKEY: '+$gkey);
      //console.log('LETTER: '+$letter);
      //console.log('FIRST NAME: '+$fname);
      //console.log('LAST NAME: '+$lname);
      //console.log('EMAIL: '+$email);
      
      ///*
      $.ajax({
        url : letterpost.ajax_url,
        type : 'post',
        data : {
          action : 'letter_sender',
          g_recaptcha_response : $gkey,
          letter : $letter,
          fname : $fname,
          lname : $lname,
          email : $email
        },
        success : function( response ) {
          console.log(response);
          $('#letter-requirements').fadeOut(300, function(){
            $('#your_name_completed').html($fname+" "+$lname);
            $('#completed_letter').fadeIn(300);
          });
        }
      });
      //*/

    }
  });

})(jQuery);
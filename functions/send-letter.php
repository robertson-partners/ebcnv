<?php


add_action('wp_ajax_letter_sender', 'letter_sender');
add_action('wp_ajax_nopriv_letter_sender', 'letter_sender');

function letter_sender() {

  $post_data = http_build_query(
    array(
        'secret' => '6LfdfHcUAAAAAKUY4uv4Ff89nX7c9HVtlPsXsQo-',
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
  );
  $opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    )
  );
  $context  = stream_context_create($opts);
  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
  $result = json_decode($response);
  
  if (!$result->success) {
    throw new Exception('CAPTCHA verification failed.', 1);
  } else {
    echo "connected template.";
  }

	wp_die();
}


/*
//response generation function
$response = "";
 
//function to generate response
function letter_sender($type, $message){

  global $response;

  if($type == "success") $response = "<div class='success'>{$message}</div>";
  else $response = "<div class='error'>{$message}</div>";

}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {

    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
      //validate presence of name and message
      if(empty($name) || empty($message)){
        my_contact_form_generate_response("error", $missing_content);
      }
      else //ready to go!
      {
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
        else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
      }
    }
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
*/
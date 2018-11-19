<?php


add_action('wp_ajax_letter_sender', 'letter_sender');
add_action('wp_ajax_nopriv_letter_sender', 'letter_sender');

function letter_sender() {

  /* CAPTCHA VERIFICATION */
  $post_data = http_build_query(
    array(
        'secret' => '6LfdfHcUAAAAAKUY4uv4Ff89nX7c9HVtlPsXsQo-',
        'response' => $_POST['g_recaptcha_response'],
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
  /* CAPTCHA VERIFICATION */
  
  if (!$result->success) {

    throw new Exception('CAPTCHA verification failed.', 1);

  } else {
    
    //user posted variables
    $fname = sanitize_text_field($_POST['fname']);
    $lname = sanitize_text_field($_POST['lname']);
    $name = $fname." ".$lname;
    $email = sanitize_email($_POST['email']);
    $reply = 'admin@everybabycountsnv.org';
    $letter = sanitize_textarea_field($_POST['letter']);

    // Mod Letter
    $letter = str_ireplace("To whom it may concern,", "%recipient_name%,", $letter);
    $letter = str_ireplace("(Write your own words here or anywhere throughout this letter.)", "", $letter);

    $letter.= "\r\n".$name;

    //$to = 'test-list@everybabycountsnv.org';
    $to = 'nv_main_ebc@everybabycountsnv.org';
    $subject = "We need your support";
    $headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $reply . "\r\n" . "Bcc: info@everybabycountsnv.org" . "\r\n";

    // Valid email?
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception('Email is invalid');
    } else {

      // Valid name and message?
      if(empty($name) || empty($letter)) {
        throw new Exception('Missing Content');
      }
      else {
        $sent = wp_mail($to, $subject, $letter, $headers);
        if($sent) {
          echo "message sent!";
        }
        else {
          echo "message failure";
        }
      }

    }

  }

	wp_die();
}
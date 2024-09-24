<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
//----
  // // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'hridoycseit@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
//----

  // $to = receiving_email_address;
  // $subject = $_POST['subject'];
  // $message = $_POST['message'];
  // $from = $_POST['email'];
  // $headers = "From:" . $from\r\n;
  // $header .= "MIME-Version: 1.0\r\n";
  // $header .= "Content-type: text/html\r\n";

  // mail($to,$subject,$message,$headers)


  <?php
  error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['email'])) {
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $name = $_POST['name'];
    $to = $_POST['destinationEmail'];

    $headers = "From: " + $from;

    // Validate the email address
    if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully to $to!";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "No email address provided.";
}
?>


?>

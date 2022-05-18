<?php


$firstname = stripcslashes($_POST['firstname']);
$lastname = stripcslashes($_POST['lastname']);
$email = stripcslashes($_POST['email']);
$object = stripcslashes($_POST['object']);
$message = stripcslashes($_POST['message']);


$mailto = 'david.philippe25750@gmail.com';

$error_message = 'Une erreur est survenue';
$success_message = 'Message envoyé';




$message = "Firstname: $firstname\r\nLastnamename: $lastname\r\nEmail: $email\r\nMessage: $message";

$headers = "From: $firstname $lastname <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

function validateEmail($email) {
  if(preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
    return true;
  else
    return false;
}

if((strlen($firstname) < 1 ) || (strlen($lastname) < 1 ) || (strlen($email) < 1 ) || (strlen($message) < 1 ) || validateEmail($email) == FALSE ) {

  echo($error_message);

} else {

  if( mail($mailto, $object, $message, $headers) ) {

    echo($success_message);

  } else {

    echo($error_message);

  }

}
?>

<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $to = $visitor_email;
  $email_from = "mail@drewasselin.com";
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from $name.\n".
                              "$name wrote:\n $message\n".

  $headers = "From: $email_from \r\n";

  @mail($to, $email_subject, $email_body, $headers);
  @mail("itsdrewclark@gmail.com", $email_subject, $email_body, $headers);

  header('Location: http://si539.drewasselin.com/contact-success.html');
?>

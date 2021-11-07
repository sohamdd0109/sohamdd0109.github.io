<?php
  $name = $_POST ['name'];
  $visitor_email = $_POST ['email'];
  $message = $_POST ['message';]

  $email_from = 'robotinsane01@gmail.com';

  $email_subject = "New Form Submission from https://sohamdd0109.github.io";

  $email_body = "Name: $name.\n".
                    "Email: $visitor_email.\n".
                        "Message: $message.\n";


  $to = 'robotinsane01@gmail.com';

  $headers = "From: $email_from \r\n";
  $headers .="Reply-to: $visitor_email \r\n";

  $mail($to,$email_subject,$email_body,$headers);

  header("Location: contact-me.html");







?>
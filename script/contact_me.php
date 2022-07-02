<?php
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];
   $phone = $_POST['phone'];

   $email_from = 'noreply@gmail.com';
   $email_subject = "New from submission";
   $email_body = "User Name: $name.\n". 
                  "User email: $visitor_email.\n".
                  "User phone: $phone" 
                  "User message: $message.\n";
   
   $to = "kiarasanchez212@gmail.com";
   $headers = "From: $email_from \r\n";
   mail($to,$email_subject,$email_body,$headers);
   header("Location: index.html");
?>
<?php
  $to = "maximka98uu@gmail.com";
  $from = trim($_POST['email']);

  $headers = "From: $from" . "\r\n" .
  "Reply-To: $from" . "\r\n" .
  "X-Mailer: PHP/" . phpversion();

  $subject = ""Заявка" Ожередов"

  mail($to, $subject)
?>
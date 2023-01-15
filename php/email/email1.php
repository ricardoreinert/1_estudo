<?php

$to = 'ricardoreinert@gmail.com';
$subject = 'Assunto teste PHP';
$message = 'este é o conteudo do email ...';
$headers = 'From: ricardoreinert@msn.com' . "\r\n" . 'Replay-To: felipereinert@outlook.com';


mail($to, $subject, $message, $headers);
echo "Email Enviado!"

?>
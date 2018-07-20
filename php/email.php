<?php

ini_set('SMTP', "localhost");
ini_set('smtp_port', "25");

$nome = $_POST["name"];
$mail_destinatario = "ale.rota.2899@gmail.com";


$mail_oggetto = "Messaggio di prova";
$mail_corpo = "Questo è un messaggio di prova per testare la mia applicazione";


$mail_headers = "From: " .  $nome . "\r\n";
$mail_headers .= "Reply-To: Sito LEScatole \r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();

if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
echo "Messaggio inviato con successo a " . $mail_destinatario;
else
echo "Errore. Nessun messaggio inviato.";
?>



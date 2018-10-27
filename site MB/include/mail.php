<?php
$sujet = '=?UTF-8?B?'.base64_encode($sujet).'?=';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .='Content-Transfer-Encoding: 8bit'."\r\n" ;
$headers .= "From: $email" . "\r\n" . "Reply-To:$email" . "\r\n";
// personnes en copie
$headers .= "Cc : amine.mac.r@gmail.com\n";
$message =  "Voici le message de $nom, numero : $tel : <br>   $message ";
if(!mail("webmaster@xxxxxxxx.com", $sujet, $message, $headers)){
    echo "erreur";
}else{
    header("location:contact.php?e=1");
}
?>
<?php
error_reporting(0);
$nombre = $_POST['name'];
$correo_electronico= $_POST['email'];
$celular = $_POST['phoneNumber'];
$asunto=$_POST['mailSubject'];
$header = 'From: ' . $correo_electronico.;
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .= "Su numero de celular es: " . $celular . " \r\n";
$mensaje .= $asunto;
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'alexlansdorprs@gmail.com';
$asunto = 'Informacion MG Inmobiliaria';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';

?> 
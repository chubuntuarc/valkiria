<?php 
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];
$para = 'valkiria@gmail.com';
$asunto = 'Mensaje de valkiriatech.com';
$header = 'From: ' . $email;
$msjCorreo = 'Nombre: $nombre\n E-Mail: $email\n  Teléfono: $telefono\n Mensaje:\n $mensaje';

if (isset("enviar")) {
     if (mail($para, $titulo, $msjCorreo, $header)) {
       ?> <script>
     alert("Mensaje enviado, muchas gracias");
     document.location=("index.html");</script><?php   
     } 
     else
{
     ?> <script>
     alert("Fallo el envio");
     document.location=("index.html");</script><?php
}
}

 ?>
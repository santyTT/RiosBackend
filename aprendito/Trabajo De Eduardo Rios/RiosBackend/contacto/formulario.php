<?php
 
 $Nombre = $_POST['name'];
 $Email = $_POST['email'];
 $Numero = $_POST['numer'];
 $Mensaje = $_POST['messaje'];


 $Mensaje = "Este Mensaje Fue Enviado Por" . $Nombre . ".\r\n";
 $Mensaje .= "Su Email Es: " . $Email . ".\r\n";
 $Mensaje .= "Mensaje: " . $_POST['messaje'] . " \r\n";
 $Mensaje .= "Enviado el " . date("Y-m-d H:i:s" . time());

 $Para = "santiprocastellar7@gmail.com";
 $asunto = "ESTE MENSAJE FUE ENVIADO DE LA WEB RIOS BACKEND";

 mail($Para, $asunto, utf8_decode($Mensaje), $header);

 header('exito.html');

 ?>
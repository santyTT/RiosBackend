<?php
if(isset($_POST["enviar"])){
  if(!empty($_POST["name"] && !empty($_POST["asunto"]) && !empty($_POST["mesaje"] && !empty($_POST["Gmail"]))))
  $name = $_POST["name"]; 
     $asunto = $_POST["asunto"];
         $mensaje = $_POST["mensaje"];
              $Gmail = $_POST["Gmail"];
                 $header.= "from: santiprocastellar7@gnail.com" . "\r\n";
              $header.= "reply-to: santiprocastellar7@gmail.com" . "\r\n";
          $header.= "X-Mailer: PHP/". phpversion();
       $Gmail = @ mail( $Gmail = $Gmail,$asunto,$mensaje,$header);
      if ($mail) {
          echo "<h4>¡mail enviado con exito!</h4>"
      }
}
?>
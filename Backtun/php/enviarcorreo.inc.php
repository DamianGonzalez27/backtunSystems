<?php
if (null!==($_POST['nombre']!='')&&($_POST['correo']!='')&&($_POST['asunto']!='')&&($_POST['mensaje']!='')) {
	# code...
    $fetha=date("d-m-Y");
    $hora=date("H:i:s");
    $asunto=$_POST['asunto'];
    $desde='From: ' . $_POST['correo'];
    $destino="damian27goa@gmail.com";
    $mensaje=$_POST['mensaje'];
    mail($destino, $asunto, $mensaje);

    header("Location:../correoCorrecto.php");



}

else {
  header("Location:../correoerror.php");
}

 ?>

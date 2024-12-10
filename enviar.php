<?php

//RECIBIR DATOS POR POST Y GUARDARLOS EN VARIABLES 
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['email'];
$mensaje=$_POST['mensaje'];

//DATOS PARA EL CORREO
$destinatario="antoniadelgado2003@gmail.com";
$asunto="solicitud de inscripcion en taller de verano-shuffle Basico";

$carta="De: $nombre /n";
$carta="Whatsapp: $telefono /n";
$carta="Correo: $correo /n";
$carta="Mensaje: $mensaje /n";

//Enviado Mensaje
mail($destinatario,$asunto,$carta);
header('Location:mensaje-enviado.php');
?>

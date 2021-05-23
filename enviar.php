<?php   

// Llamando a los campos 
$nombre = $_POST['nombre']; 
$correo = $_POST['email']; 
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje']; 

// Datos para el correo 
$destinatario = "su_correo@gmail.com";

//carta 
$carta = "De: $nombre \n";  //salto de linea /n
$carta .= "Aunto: $asunto\n";
$carta .= "Correo: $correo \n";
//$carta .= "Telefono: $telefono \n"; 
$carta .= "Mensaje: $mensaje"; 

// Enviando Mensaje 
mail($destinatario, $asunto, $carta);  
header('location:mensaje-de-envio.html'); 

?> 
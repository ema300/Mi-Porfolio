<?php
session_start(); /*abrir sesión */
$conn = mysqli_connect(   /*creo la variable conn de connection, donde es igual a la conexión sql con el comando: mysli_connect  */
    "localhost", /*adonde nos vamos a conectar-IP del hosting y el puerto (dirección del servidor)*/
    "root", /*usuario de la base de datos*/
    "root", /*contraseña de la base de datos */
    "test" /* nombre de la base de datos*/
);
if (isset($conn)) {     /*si la conectividad se realizó, envia el mje*/
    echo "conexión exitosa";
}

?>
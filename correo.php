<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['number'];

$formcontent="
    Datos de Contacto: \n
    Nombre: $nombre \n
    Email: $email \n
    Telefono: $telefono \n
";

$recipient = "contacto@habitoslunaticos.com.ar";

$subject = "Consulta de formulario de $nombre";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: formSend.html");

?>
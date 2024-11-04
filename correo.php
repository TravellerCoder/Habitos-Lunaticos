<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$formcontent="
    Datos de Contacto: \n
    Nombre: $nombre \n
    Email: $email \n
    Telefono: $telefono \n
";

$recipient = "guillermobukowski@gmail.com";

$subject = "Consulta de formulario de $empresa";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: form-ok.html");

?>
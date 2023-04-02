<?php
// Recibe los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Crea el mensaje que se enviará por correo electrónico
$to = "bicirepuestos.david01@gmail.com"; // Reemplaza "tucorreo@example.com" con tu dirección de correo electrónico
$subject = "Nuevo mensaje de contacto de Bicic Repuestos";
$body = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

// Envía el correo electrónico
mail($to, $subject, $body);

// Redirige al usuario a una página de confirmación
header("Location: gracias.html");
?>

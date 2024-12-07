<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Destinatario (tu correo)
    $to = "tebankai07@gmail.com";

    // Asunto del correo
    $subject = "Nuevo mensaje desde el formulario de contacto";

    // Cuerpo del mensaje
    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";

    // Cabeceras del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>

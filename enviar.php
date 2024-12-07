<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "tebankai07@gmail.com"; // Cambia este correo por el tuyo
    $subject = "Nuevo mensaje de contacto de $name";
    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
            alert('Mensaje enviado exitosamente. Gracias por contactarme.');
            window.location.href = 'contacto.html';
        </script>";
    } else {
        echo "<script>
            alert('Hubo un problema al enviar el mensaje. Inténtalo de nuevo.');
            window.location.href = 'contacto.html';
        </script>";
    }
} else {
    header("Location: contacto.html");
    exit();
}
?>

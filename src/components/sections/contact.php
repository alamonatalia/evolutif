<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpiar datos
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    $to = "contactus@evolutif.ar"; // Cambia por tu email real
    $subject = "Nuevo mensaje desde tu web";
    $body = "Email: $email\n\nMensaje:\n$message";
    $headers = "From: $email";

    // Enviar email
    if (mail($to, $subject, $body, $headers)) {
        // Redirigir con mensaje de éxito
        header("Location: index.html?status=success");
        exit;
    } else {
        // Redirigir con mensaje de error
        header("Location: index.html?status=error");
        exit;
    }
} else {
    // Acceso directo no permitido
    header("Location: index.html");
    exit;
}
?>

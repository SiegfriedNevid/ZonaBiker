<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Configuración del correo
    $destinatario = "siegfriedcequera@gmail.com";
    $asunto = "Nuevo mensaje de $nombre";

    // Construir el mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo Electrónico: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $email";

    // Enviar el correo
    $enviado = mail($destinatario, $asunto, $cuerpoMensaje, $cabeceras);

    if ($enviado) {
        // Puedes redirigir a una página de confirmación u otra acción después de enviar el correo.
        header("Location: confirmacion.html");
        exit();
    } else {
        // Manejo de error, redirigir a una página de error, etc.
        echo "Error al enviar el correo. Por favor, inténtalo de nuevo.";
    }
}
?>
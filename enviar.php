<?php
    $destino = "jesuscalamani@outlook.com";

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $asunto = $_POST['asunto'];
    $message = $_POST['message'];

    $contenido = "Nombre: ". $name . "\nCorreo:" . $mail . "\nTelefono:" . $phone . "\nAsunto:" . $asunto . "\nMensaje:" . $message;

    mail($destino, $asunto, $message);
    header("Location:index.html");
?>

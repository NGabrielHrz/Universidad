<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $to = "destinatario@example.com";
    $subject = "Nuevo correo enviado";
    $message = "Nombre: " . $nombre . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Mensaje: " . $mensaje;

    $headers = "From: " . $email . "\r\n" ."Reply-To: " . $email . "\r\n" . "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
      echo
      '<script>
        alert("El correo se envio correctamente");
        location.href = "email.php";
      </script>'
      ;
    } else {
      echo
      '<script>
        alert("El correo no pudo enviarse correctamente");
        location.href = "email.php";
      </script>'
      ;
    }
}
?>
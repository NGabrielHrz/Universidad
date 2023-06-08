<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar los valores del formulario
  $de = $_POST["de"];
  $para = $_POST["para"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];

  // Configurar los encabezados del correo electrónico
  $encabezados = "MIME-Version: 1.0" . "\r\n";
  $encabezados .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $encabezados .= "From: " . $de . "\r\n";

  // Construir el cuerpo del correo electrónico
  $cuerpo .= "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";

  // Enviar el correo electrónico
  $resultado = mail($para, $asunto, $cuerpo, $encabezados);

  // Verificar si el correo electrónico se envió correctamente
  if ($resultado) {
    echo
    '<script>
      alert("El correo se envio correctamente");
      location.href = "email.php"
    </script>'
    ;
  } else {
    echo
    '<script>
      alert("El correo se no envio correctamente");
      location.href = "email.php"
    </script>'
    ;
  }
}
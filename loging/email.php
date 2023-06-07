<?php
require "segurity.php";
require "../connection.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>University</title>
</head>

<body>
  <?php
  include "menu.php";
  ?>
  <section class="home">
    <h1 class="text">Envia un correo electronico</h1>
    <div class="email-board">
      <form method="post" action="enviar_correo.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required class="form-input" placeholder="Su nombre"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required class="form-input" placeholder="Destinatario"><br>
        <label for="email">Asunto:</label>
        <input type="email" name="asunto" id="asunto" required class="form-input" placeholder="Asunto"><br>
        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" rows="5" required class="form-textArea"></textarea><br>

        <input type="submit" value="Enviar correo" id="send-email">
      </form>
    </div>
  </section>
  <script src="script.js"></script>
</body>

</html>
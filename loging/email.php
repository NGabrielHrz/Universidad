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
  <script>
  function Enviar(){
    if(document.getElementById("de").value.length == 0){
      alert("Olvido llenar el campo donde deveria ir su 'correo electrónico'");
      document.getElementById("de").focus();
      return 0;
    }
    if(document.getElementById("para").value.length == 0){
      alert("Olvido llenar el campo donde deveria ir 'a quien va dirigido el correo'");
      document.getElementById("para").focus();
      return 0;
    }
    if(document.getElementById("asunto").value.length == 0){
      alert("Olvido llenar el campo donde deveria ir 'el asunto del correo'");
      document.getElementById("asunto").focus();
      return 0;
    }
    document.Form.submit();
  }
</script>

<body>
  <?php
  include "menu.php";
  ?>
  <section class="home">
    <h1 class="text">Envia un correo electronico</h1>
    <div class="email-board">
      <form method="post" action="enviar_correo.php">
        <label for="nombre" class="text">De:</label>
        <input type="email" name="de" id="de" required class="form-input" placeholder="Emisor"><br>
        <label for="email" class="text">Para:</label>
        <input type="email" name="para" id="para" required class="form-input" placeholder="Destinatario"><br>
        <label for="asunto" class="text">Asunto:</label>
        <input type="text" name="asunto" id="asunto" required class="form-input" placeholder="Asunto"><br>
        <label for="mensaje" class="text">Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" rows="5" required class="form-textArea"></textarea><br>

        <button type="submit" id="send-email" onclick="Enviar()">Enviar</button>
      </form>
    </div>
  </section>
  <script src="script.js"></script>
</body>

</html>
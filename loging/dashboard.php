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
    <div class="text">Panel principal</div>
    <div class="task-list">
      <table class="table-task-list">
        <tr class="tr-task-list">
          <th align="center">ID de la tarea</th>
          <th align="center">Materia</th>
          <th align="center">Descripción</th>
          <th align="center">Eliminar</th>
        </tr>
        <?php
        $todos_usuarios = "SELECT * FROM tareas ORDER BY id ASC";
        $result = $conexion->query($todos_usuarios);
        while ($row = $result->fetch_assoc()) {
          echo "<tr class='tr-task-list'>";
          echo "<td align='center' class='text'>" . $row["id"] . "</td>";
          echo "<td align='center' class='text'>" . $row["materia"] . "</td>";
          echo "<td align='center' class='text'>" . $row["descripcion"] . "</td>";
          echo "<td align='center' class='text'><a href='borrar.php?id=" . $row["id"] . "'>Eliminar</a></td>";
          echo "</tr>";
        ?>
        <?php
        }
        mysqli_free_result($result);
        ?>
      </table>
    </div>
  </section>
  <script src="script.js"></script>
</body>

</html>
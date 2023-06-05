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
    <form action="save_task.php" method="post">
      <h1 class="text">To-do List</h1>
      <div class="todo-container">
        <select name="materia" id="materia">
          <option value="">seleccionar materia</option>
          <option value="Ciencia de datos">Ciencia de datos</option>
          <option value="Programacion web">Programación web</option>
          <option value="Arquitectura de computadoras">Arquitectura de computadoras</option>
        </select>
        <input type="text" name="descripcion" id="task-input" placeholder="Descripción de la tarea">
        <button id="add-task-btn" type="submit">Agregar tarea</button>
      </div>
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
            echo "<tr>";
            echo "<td align='center'>" . $row["id"] . "</td>";
            echo "<td align='center'>" . $row["materia"] . "</td>";
            echo "<td align='center'>" . $row["descripcion"] . "</td>";
            echo "<td align='center'><a href='borrar.php?id=" . $row["id"] . "'>Eliminar</a></td>";
            echo "</tr>";
          ?>
          <?php
          }
          mysqli_free_result($result);
          ?>
        </table>
      </div>
    </form>
  </section>
  <script src="script.js"></script>
</body>

</html>
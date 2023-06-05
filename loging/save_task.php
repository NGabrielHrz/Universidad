<?php
  require "../connection.php";

  $materia = $_POST['materia'];
  $dess = $_POST['descripcion'];

  $materia = mysqli_real_escape_string($conexion, $materia);
  $dess = mysqli_real_escape_string($conexion, $dess);

  $sql = "INSERT INTO tareas (materia, descripcion) VALUES ('$materia','$dess')";

  if (mysqli_query($conexion, $sql)) {
    echo
    '<script>
      alert("La tarea se guardo correctamente");
      location.href = "to-do.php";
    </script>'
    ;
  } else {
    echo
    '<script>
      alert("ERROR: No se guardo correctamente la tarea");
      location.href = "to-do.php"
    </script>'
    . mysqli_error($conexion);
  }

  mysqli_close($conexion);
  ?>
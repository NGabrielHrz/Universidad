<?php
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  require "../connection.php";

  if (isset($_GET["confirm"]) && $_GET["confirm"] === "true") {
    $borrar_usuario = "DELETE FROM tareas WHERE id = $id";

    if ($conexion->query($borrar_usuario) === TRUE) {
      echo
      '<script>
        alert("Se borró el registro correctamente");
        location.href = "dashboard.php";
      </script>';
    } else {
      echo
      '<script>
        alert("No se pudo borrar el registro correctamente: ");
        location.href = "dashboard.php";
      </script>' . $conexion->error;
    }

    $conexion->close();
  } else {
    echo
    '<script>
      if (confirm("¿Estás seguro de que quieres borrar este registro?")) {
        location.href = "' . $_SERVER['PHP_SELF'] . '?id=' . $id . '&confirm=true";
      } else {
        location.href = "dashboard.php";
      }
    </script>';
  }
} else {
  echo "No se proporcionó el parámetro 'id' en la URL.";
}
?>

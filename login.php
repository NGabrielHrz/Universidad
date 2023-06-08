<?php
require "connection.php";

$user = $_POST['user'];
$password = $_POST['pass'];
$sql = "SELECT * FROM usuarios WHERE user = '$user' AND contrasena = '$password'";

$result = $conexion->query($sql);

if ($result->num_rows == 1) {
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['autentificado'] = "SI";
  header("Location: loging/dashboard.php");
} else {
  echo
  '<script>
    alert("ERROR EN LA AUTENTIFICACION");
    location.href = "user-acces.php?errorusuario=SI"
  </script>'
  ;
}

$conexion->close();
?>
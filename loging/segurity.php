<?php
session_start();
if ($_SESSION["autentificado"] != "SI"){
  header("location: ../index.php");
  exit();
}
?>
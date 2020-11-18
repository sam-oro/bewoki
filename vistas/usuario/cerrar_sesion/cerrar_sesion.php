<?php

session_start();
session_destroy();

echo "<script>  alert('Sesion cerrada correctamente') </script>";
echo "<script>  location.href='../iniciar_sesion.php'; </script>";

?>
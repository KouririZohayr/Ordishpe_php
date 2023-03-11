<?php
session_start();
session_unset($_SESSION["idclientA"]);
session_unset($_SESSION["nomA"]);
session_destroy();

echo "<script>window.location.href='Nos_ordinateur.php';</script>";
?>
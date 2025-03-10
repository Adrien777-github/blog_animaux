<?php
session_start(); // Démarrer la session
$_SESSION = [];
session_destroy();
header("Location: /blog/login-registration.php");
exit();
?>
<?php
session_start(); // Démarrer la session
session_unset();
$_SESSION = [];
session_destroy();
header("Location: /blog/login-registration.php");
exit();
?>
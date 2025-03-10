<?php
session_start();
require 'controllerUser.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pwd = sha1($_POST["mdp"]);
    addUtilisateur($pdo, $_POST["nom"], $_POST["email"], $pwd);
    // $_SESSION['message'] = "Crée avec succès!";
    header("Location: ../login-registration.php");
    exit();
}
?>
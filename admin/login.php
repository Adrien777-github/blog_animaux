<?php
session_start();
require 'controllerUser.php';
// Récupération des étudiants
$users = getUtilisateurs($pdo);

foreach ($users as $user){
    $pwd = sha1($_POST['mdp']);
    if($user["email"] === $_POST['email'] && $user["mot_de_passe"] === $pwd){
        $_SESSION['user'] = $user["email"];
        header("Location: accueil.php");
        exit();
    }
    else{
        $_SESSION['erreur'] = "Login invalide";
        header("Location: ../login-registration.php");
        exit();
    }
}
?>
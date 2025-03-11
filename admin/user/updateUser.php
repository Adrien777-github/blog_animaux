<?php
require 'controllerUser.php';
if (!isset($_GET["id"])) {
    header("Location: utilisateur.php");
    exit();
}
$id = $_GET["id"];
$user = getUtilisateur($pdo, $id);

var_dump($user);
die();
?>
<?php
require 'controllerUser.php';

if (isset($_GET["id"])) {
    deleteUtilisateur($pdo, $_GET["id"]);
}

header("Location: utilisateur.php");
exit();
?>

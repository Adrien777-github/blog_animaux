<?php
require 'controllerCategorie.php';

if (isset($_GET["id"])) {
    if(deleteCategorie($pdo, $_GET["id"])){
        header("Location: categorie.php");
        exit();
    }
}

?>

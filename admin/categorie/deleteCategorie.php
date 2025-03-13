<?php
require 'controllerCategorie.php';

if (isset($_GET["id"])) {
    deleteCategorie($pdo, $_GET["id"]);
}
header("Location: categorie.php");
exit();
?>

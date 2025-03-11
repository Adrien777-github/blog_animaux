<?php
require 'controllerArticle.php';

if (isset($_GET["id"])) {
    deleteArticle($pdo, $_GET["id"]);
}

header("Location: article.php");
exit();
?>

<?php
require 'controllerCategorie.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = trim($_POST['titre']);
    $description = trim($_POST['description']);

    if (empty($titre)) {
        echo json_encode(["success" => false, "message" => "Tous les champs sont obligatoires."]);
        exit;
    }

    addCategorie($pdo, $_POST["titre"], $_POST["description"]);
    echo json_encode(["success" => true]);

}
?>

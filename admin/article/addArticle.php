<?php
session_start();
require 'controllerArticle.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = trim($_POST['titre']);
    $description = trim($_POST['description']);
    $categorie = trim($_POST['categorie']);
    $image = $_FILES['image'];
    $auteur = $_SESSION['user'];

    if (empty($titre) || empty($description) || empty($categorie) || !$image) {
        echo json_encode(["success" => false, "message" => "Tous les champs sont obligatoires."]);
        exit;
    }

    // Vérifier et traiter l'upload de l'image
    $uploadDir = "C:/xampp/htdocs/blog/images/";
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    $filename = uniqid()."_".basename($_FILES["image"]["name"]);
    $imagePath = $uploadDir.$filename;
    $path_bdd = "/blog/images/".$filename;
    $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];

    if (!in_array($imageFileType, $allowedTypes)) {
        echo json_encode(["success" => false, "message" => "Veuiller séléctionner une image jpg, jpeg, png ou gif"]);
        exit;
    }

    if (move_uploaded_file($image["tmp_name"], $imagePath)) {
        addArtilce($pdo, $titre, $description, $categorie, $path_bdd , $auteur);
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Erreur lors de l'upload."]);
    }
}
?>

<?php
session_start();
require 'controllerArticle.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = trim($_POST['titre']);
    $description = trim($_POST['description']);
    $categorie = trim($_POST['categorie']);
    $image_past = $_POST['img'];
    $id = $_POST['id'];
    $auteur = $_SESSION['user'];

    if (empty($titre) || empty($description) || empty($categorie)) {
        echo json_encode(["success" => false, "message" => "Tous les champs sont obligatoires."]);
        exit;
    }

    
    // Vérifier et traiter l'upload de l'image
    if($_FILES['image']['size'] > 0){
        $image = $_FILES['image'];
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
            // supprimer les fichiers existants $uploadDir."".$image_past;
            
            if (unlink("C:/xampp/htdocs".$image_past)) {
            } else {
                echo json_encode(["success" => false, "message" => "le fichier a supprimé n'existe pas"]);
            }
            updateArticle($pdo,$id,$titre,$description,$categorie,$path_bdd);
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Erreur lors de l'upload."]);
        }
    }else{
        updateArticle($pdo,$id,$titre,$description,$categorie,$image_past);
        echo json_encode(["success" => true]);
    }
    
}
?>

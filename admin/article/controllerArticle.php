<?php
$path = dirname(__DIR__).DIRECTORY_SEPARATOR."config.php";
include_once($path);
// Fonction pour récupérer tous les articles
function getArticle($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC); // Récupère l'article sous forme de tableau associatif
}

function getArticles($pdo) {
    // Préparation de la requête
    $stmt = $pdo->prepare("SELECT * FROM articles");
    // Exécution de la requête
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter un article
function addArtilce($pdo, $titre, $description, $categorie, $image, $auteur) {
    $stmt = $pdo->prepare("INSERT INTO articles (titre, description, categorie, image, auteur) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$titre, $description, $categorie, $image, $auteur]);
}

// Fonction pour modifier un article
function updateArticle($pdo, $id, $titre, $description, $categorie, $image) {
    $stmt = $pdo->prepare("UPDATE articles SET titre = ?, description = ?, categorie = ?, image = ?  WHERE id = ?");
    $stmt->execute([$titre, $description, $categorie, $image, $id]);
}

// Fonction pour supprimer un article
function deleteArticle($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM articles WHERE id = ?");
    $stmt->execute([$id]);
}
?>
<?php
include_once('../config.php');
// Fonction pour récupérer tous les articles
function getArticles($pdo) {
    $stmt = $pdo->query("SELECT * FROM articles");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter un article
function addArtilce($pdo, $titre, $description, $categorie, $image) {
    $stmt = $pdo->prepare("INSERT INTO articles (titre, description, categorie, image) VALUES (?, ?, ?, ?)");
    $stmt->execute([$titre, $description, $categorie, $image]);
}

// Fonction pour modifier un article
function updateArticle($pdo, $id, $titre, $description, $categorie, $image) {
    $stmt = $pdo->prepare("UPDATE articles SET nom = ?, email = ?, mot_de_passe = ? WHERE id = ?");
    $stmt->execute([$titre, $description, $categorie, $image, $id]);
}

// Fonction pour supprimer un article
function deleteArticle($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM articles WHERE id = ?");
    $stmt->execute([$id]);
}
?>
<?php
$path = dirname(__DIR__).DIRECTORY_SEPARATOR."config.php";
include_once($path);

function getCategorie($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM categorie WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC); // Récupère l'article sous forme de tableau associatif
}

// Fonction pour récupérer tous les categories
function getCategories($pdo) {
    $stmt = $pdo->query("SELECT * FROM categorie");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter un categorie
function addCategorie($pdo, $nom, $description) {
    $stmt = $pdo->prepare("INSERT INTO categorie (nom, description) VALUES (?, ?)");
    $stmt->execute([$nom, $description]);
}

// Fonction pour modifier un categorie
function updateCategorie($pdo, $id, $nom, $description) {
    $stmt = $pdo->prepare("UPDATE categorie SET nom = ?, description = ? WHERE id = ?");
    $stmt->execute([$nom, $description, $id]);
}

// Fonction pour supprimer un categorie
function deleteCategorie($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM categorie WHERE id = ?");
    $stmt->execute([$id]);
}
?>
<?php
$path = dirname(__DIR__).DIRECTORY_SEPARATOR."config.php";
include_once($path);
// Fonction pour récupérer tous les utilisateurs
function getUtilisateurs($pdo) {
    $stmt = $pdo->query("SELECT * FROM utilisateur");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter un utilisateur
function addUtilisateur($pdo, $nom, $email, $password) {
    $stmt = $pdo->prepare("INSERT INTO utilisateur (nom, email, mot_de_passe) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $password]);
}

// Fonction pour modifier un utilisateur
function updateUtilisateur($pdo, $id, $nom, $email, $password) {
    $stmt = $pdo->prepare("UPDATE utilisateur SET nom = ?, email = ?, mot_de_passe = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $password, $id]);
}

// Fonction pour supprimer un utilisateur
function deleteUtilisateur($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM utilisateur WHERE id = ?");
    $stmt->execute([$id]);
}
?>
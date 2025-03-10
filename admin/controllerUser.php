<?php
include_once('config.php');
// Fonction pour récupérer tous les étudiants
function getUtilisateurs($pdo) {
    $stmt = $pdo->query("SELECT * FROM utilisateur");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter un étudiant
function addUtilisateur($pdo, $nom, $prenom, $email) {
    $stmt = $pdo->prepare("INSERT INTO utilisateur (nom, email, mot_de_passe) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $prenom, $email]);
}

// Fonction pour modifier un étudiant
function updateUtilisateur($pdo, $id, $nom, $prenom, $email) {
    $stmt = $pdo->prepare("UPDATE utilisateur SET nom = ?, email = ?, mot_de_passe = ? WHERE id = ?");
    $stmt->execute([$nom, $prenom, $email, $id]);
}

// Fonction pour supprimer un étudiant
function deleteUtilisateur($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM utilisateur WHERE id = ?");
    $stmt->execute([$id]);
}
?>
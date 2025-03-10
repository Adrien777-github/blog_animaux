<?php
// Connexion à la base de données avec gestion des erreurs
try {
    $pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
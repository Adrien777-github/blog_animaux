<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: ../login-registration.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Vertical Bootstrap</title>
    <link href="/blog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="/blog/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../favicon.png">
</head>
<body>
    <div id="sidebarMenu" class="sidebar d-flex flex-column">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="accueil.php"><i class="fas fa-home"></i> <span>Accueil</span></a>
        <a href="#"><i class="fas fa-user"></i> <span>Mon Profil</span></a>
        <a href="#"><i class="fas fa-users"></i> <span>Listes utilisateurs</span></a>
        <a href="/blog/admin/article/article.php"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="/blog/admin/categorie/categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
    <div class="content">
        <h2>Contenu principal</h2>
        <p>Bienvenue sur la page avec une barre de navigation verticale sombre.</p>
    </div>
    <script src="/blog/assets/js/script.js"></script>
</body>
</html>

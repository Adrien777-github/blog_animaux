<?php
require('../categorie/controllerCategorie.php');
require('controllerArticle.php');
// Récupération des catégories
$categories = getCategories($pdo);
$articles = getArticles($pdo);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link href="/blog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="/blog/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/blog/favicon.png">

    <style>
        .card{
            margin-right: 20px;
        }
        .btn-add{
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <div id="sidebarMenu" class="sidebar d-flex flex-column">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="../accueil.php"><i class="fas fa-home"></i> <span>Accueil</span></a>
        <a href="#"><i class="fas fa-user"></i> <span>Mon Profil</span></a>
        <a href="#"><i class="fas fa-users"></i> <span>Listes utilisateurs</span></a>
        <a href="article.php"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="/blog/admin/categorie/categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="/blog/admin/logout.php"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
<div class="content">
        <div class="container">
            <a href="form-add-article.php" class="btn btn-success btn-add"><i class="fas fa-plus"></i> Ajouter</a>
            <div class="row justify-content-center">
                <?php foreach ($articles as $article) : ?>
                <div class="col-md-3 mt-3 card" style="width: 18rem;" >
                    <img src="<?= $article["image"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article["titre"] ?></h5>
                        <p class="card-text"><?= $article["description"] ?></p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
</div>
    <script src="/blog/assets/js/script.js"></script>
    <script src="/blog/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
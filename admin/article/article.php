<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: /blog/login-registration.php");
    exit();
}

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
    <title>Administration | Articles</title>
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
    <script>
        function confirmDelete(id) {
            if (confirm("Voulez-vous vraiment supprimer cet catégorie ?")) {
                window.location.href = "deleteArticle.php?id=" + id;
            }
        }
    </script>
</head>
<body>
    <div id="sidebarMenu" class="sidebar d-flex flex-column">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="../accueil.php"><i class="fas fa-home"></i> <span>Accueil</span></a>
        <a href="/blog/admin/profil.php"><i class="fas fa-user"></i> <span>Mon Profil</span></a>
        <a href="/blog/admin/user/utilisateur.php"><i class="fas fa-users"></i> <span>Listes utilisateurs</span></a>
        <a href="article.php"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="/blog/admin/categorie/categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="/blog/admin/logout.php"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
<div class="content">
        <div class="container mt-3">
            <a href="form-add-article.php" class="btn btn-success btn-add"><i class="fas fa-plus"></i> Ajouter</a>
            <div class="row justify-content-center">
                <?php foreach ($articles as $article) : ?>
                <div class="col-md-3 mt-3 card" style="width: 18rem;" >
                    <img src="<?= $article["image"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article["titre"] ?></h5>
                        <?php $description  = mb_substr($article["description"], 0, 200, "UTF-8"); ?>
                        <p class="card-text"><?= $description." ..." ?></p>
                        <div class="btn-group">
                            <a href="form-update-article.php?id=<?= $article['id'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                            <button onclick="confirmDelete(<?= $article['id'] ?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
<?php 
    $path = dirname(__DIR__).DIRECTORY_SEPARATOR."layout".DIRECTORY_SEPARATOR."footer.php";
    include($path);
?>
</div>
<script src="/blog/assets/js/script.js"></script>
<script src="/blog/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
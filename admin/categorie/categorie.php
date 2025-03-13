<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: /blog/login-registration.php");
        exit();
    }

    require('controllerCategorie.php');
    // Récupération des étudiants
    $categories = getCategories($pdo);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration | Categorie</title>
    <link href="/blog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="/blog/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/blog/favicon.png">
    <script>
        function confirmDelete(id) {
            if (confirm("Voulez-vous vraiment supprimer cet catégorie ?")) {
                window.location.href = "deleteCategorie.php?id=" + id;
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
        <a href="/blog/admin/article/article.php"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="/blog/admin/logout.php"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
    <div class="content">
    <div class="container mt-3">
    <h2 class="mb-4">Liste des catégories <a href="form-add-categorie.php" class="btn btn-success" style="float:right">Ajouter une catégorie</a></h2>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $categorie) : ?>
                    <tr>
                        <td><?php echo $categorie["id"]; ?></td>
                        <td><?= $categorie["nom"] ?></td>
                        <td><?= $categorie["description"] ?></td>
                        <td align="center">
                            <a href="form-update-categorie.php?id=<?= $categorie['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-pen"></i> Modifier</a>
                            <button onclick="confirmDelete(<?= $categorie['id'] ?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Supprimer</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
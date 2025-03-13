<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: /blog/login-registration.php");
        exit();
    }

    require('controllerUser.php');
    // Récupération des étudiants
    $utilisateurs = getUtilisateurs($pdo);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration | Utilisateurs</title>
    <link href="/blog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="/blog/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/blog/favicon.png">
    <script>
        function confirmDelete(id) {
            if (confirm("Voulez-vous vraiment supprimer cet utilisateur ?")) {
                window.location.href = "deleteUser.php?id=" + id;
            }
        }
    </script>
</head>
<body>
    <div id="sidebarMenu" class="sidebar d-flex flex-column">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="/blog/admin/accueil.php"><i class="fas fa-home"></i> <span>Accueil</span></a>
        <a href="/blog/admin/profil.php"><i class="fas fa-user"></i> <span>Mon Profil</span></a>
        <a href="/blog/admin/user/utilisateur.php"><i class="fas fa-users"></i> <span>Listes utilisateurs</span></a>
        <a href="/blog/admin/article/article.php"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="/blog/admin/categorie/categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="/blog/admin/logout.php"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
<div class="content">
    <div class="container mt-3">
        <h2 class="mb-4">Liste des utilisateurs</h2>
        <table class="table table-bordered table-hover">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateurs as $utilisateur) : ?>
                    <tr>
                        <td><?php echo $utilisateur["id"]; ?></td>
                        <td><?= $utilisateur["nom"] ?></td>
                        <td><?= $utilisateur["email"] ?></td>
                        <td align="center">
                            <a href="form-update-user.php?id=<?= $utilisateur['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-pen"></i> Modifier</a>
                            <button onclick="confirmDelete(<?= $utilisateur['id'] ?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Supprimer</button>
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
</body>
</html>

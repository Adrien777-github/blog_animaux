<?php
require('../categorie/controllerCategorie.php');
require('controllerArticle.php');

// Récupération des catégories
$categories = getCategories($pdo);
$article = getArticle($pdo, $_GET['id']);
$id_categorie = $article['categorie'];
$categorie_art = getCategorie($pdo, $id_categorie);

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
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4>Modifier un article</h4>
                    </div>
                    <div class="card-body">
                    <form id="articleUpdate" class="needs-validation" novalidate method="POST" action="updateArticle.php" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" value="<?= $article["image"] ?>" id="img" name="img">
                        <input type="hidden" class="form-control" value="<?= $article["id"] ?>" id="id" name="id">
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" class="form-control" value="<?= $article["titre"] ?>" id="titre" name="titre" required>
                            <div class="invalid-feedback">Le titre est obligatoire</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required><?= $article["description"] ?></textarea>
                            <div class="invalid-feedback">La description est obligatoire</div>
                        </div>

                        <div class="mb-3">
                            <label for="categorie" class="form-label">Catégorie</label>
                            <select class="form-select" id="categorie" name="categorie" required>
                            <option value="<?= $categorie_art["id"] ?>"><?= $categorie_art["nom"] ?></option>
                            <?php foreach ($categories as $categorie) : ?>
                                <option value="<?= $categorie["id"] ?>"><?= $categorie["nom"] ?></option>
                            <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">Veuillez sélectionner une catégorie</div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image" accept="image/*">
                            <div class="invalid-feedback">Veuillez sélectionner une image</div>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit">Modifier l'article</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    $path = dirname(__DIR__).DIRECTORY_SEPARATOR."layout".DIRECTORY_SEPARATOR."footer.php";
    include($path);
?>
</div>
<script src="/blog/assets/js/script.js"></script>
<script src="/blog/assets/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById("articleUpdate").addEventListener("submit", function(event) {
    event.preventDefault();
    
    let form = this;
    
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
    }

    let formData = new FormData(form);

    fetch("updateArticle.php", {
        method: "POST",
        body: formData
    }).then(response => response.json()).then(data => {
        if (data.success) {
            alert("Article modifié avec succès !");
            form.reset();
            form.classList.remove('was-validated');
        } else {
            alert("Erreur : " + data.message);
        }
    });
});
</script>
</body>
</html>
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
</head>
<body>
    <div id="sidebarMenu" class="sidebar d-flex flex-column">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="../accueil.php"><i class="fas fa-home"></i> <span>Accueil</span></a>
        <a href="#"><i class="fas fa-user"></i> <span>Mon Profil</span></a>
        <a href="#"><i class="fas fa-users"></i> <span>Listes utilisateurs</span></a>
        <a href="/blog/admin/article/article.php"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
    <div class="content">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h4>Créer une catégorie</h4>
                    </div>
                    <div class="card-body">
                    <form id="categorieForm" class="needs-validation" novalidate method="POST" action="addCategorie.php">
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" required>
                            <div class="invalid-feedback">Le titre est obligatoire</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-info" type="submit">Créer la catégorie</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="/blog/assets/js/script.js"></script>
    <script src="/blog/assets/js/bootstrap.bundle.min.js"></script>
    <script>
document.getElementById("categorieForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    let form = this;
    
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
    }

    let formData = new FormData(form);

    fetch("addCategorie.php", {
        method: "POST",
        body: formData
    }).then(response => response.json()).then(data => {
        if (data.success) {
            alert("Catégorie créé avec succès !");
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
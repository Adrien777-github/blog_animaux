<?php
session_start();
require('user/controllerUser.php');

// Récupération des catégories
$mon_profil = getUtilisateur($pdo, $_SESSION['user']);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(updateUtilisateur($pdo, $mon_profil["id"], $_POST["nom"], $_POST["email"], sha1($_POST["pwd"]))){
        header("Location: profil.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration | Mon profil</title>
    <link href="/blog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="/blog/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/blog/favicon.png">
    <style>
        .alert-success {
            display: none;
        }
    </style>
</head>
<body>
    <div id="sidebarMenu" class="sidebar d-flex flex-column">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="accueil.php"><i class="fas fa-home"></i> <span>Accueil</span></a>
        <a href="/blog/admin/profil.php"><i class="fas fa-user"></i> <span>Mon Profil</span></a>
        <a href="/blog/admin/user/utilisateur.php"><i class="fas fa-users"></i> <span>Listes utilisateurs</span></a>
        <a href="/blog/admin/article/article.php"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="/blog/admin/categorie/categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="/blog/admin/logout.php"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
    <div class="content">

<div class="container mt-3">
        <div class="row justify-content-center">
        <div id="message" class="alert alert-success" role="alert" style="display:none;">
            <strong>Profil !</strong> modifié avec succès!
        </div>
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4>Modifier mon profil</h4>
                    </div>
                    <div class="card-body">
                    <form id="UserForm" class="needs-validation" novalidate method="POST" action="">
                        <div class="mb-3">
                            <label for="titre" class="form-label">Nom</label>
                            <input type="text" class="form-control" value="<?= $mon_profil['nom'] ?>" id="nom" name="nom" required>
                            <div class="invalid-feedback">Le nom est obligatoire</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Email</label>
                            <input type="email" class="form-control" value="<?= $mon_profil['email'] ?>" id="email" name="email" required>
                            <div class="invalid-feedback">L'email est obligatoire</div>
                        </div>
            
                        <div class="mb-3">
                            <label for="image" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="pwd" name="pwd" required minlength="6">
                            <div class="invalid-feedback">Le mot de passe ne doit pas être vide et doit comporter au moins 6 caractères</div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Confirmer</label>
                            <input type="password" class="form-control" id="c_pwd" name="new_pwd" required oninput="this.setCustomValidity(this.value !== pwd.value ? 'Les mots de passe ne correspondent pas.' : '')">
                            <div class="invalid-feedback">Les mots de passes ne correspondent pas</div>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit">Créer l'article</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    $path = dirname(__DIR__).DIRECTORY_SEPARATOR."admin".DIRECTORY_SEPARATOR."layout".DIRECTORY_SEPARATOR."footer.php";
    include($path);
?>
</div>
<script src="/blog/assets/js/script.js"></script>
<script src="/blog/assets/js/bootstrap.bundle.min.js"></script>
<script src="/blog/assets/js/jquery.min.js"></script>
<script>
document.getElementById("UserForm").addEventListener("submit", function(event) {
    event.preventDefault();
    let password = document.getElementById('pwd');
    let confirmPassword = document.getElementById('c_pwd');
    let form = this;
    let isValid = true;

    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
    }
    
    if (!isValid) return;
        form.classList.remove('is-invalid');
        $.post('/blog/admin/profil.php', $(this).serialize(), function(response) {
        $('#message').fadeIn().delay(3000).fadeOut();
    });

});
</script>
</body>
</html>
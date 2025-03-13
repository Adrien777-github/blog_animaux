<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: /blog/login-registration.php");
        exit();
    }

    if (!isset($_GET["id"])) {
        header("Location: categorie.php");
        exit();
    }

    require('controllerUser.php');
    // Récupération des étudiants
    $id = $_GET["id"];
    $user = getUtilisateur($pdo, $id);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(updateUtilisateur($pdo, $_POST["id"], $_POST["nom"], $_POST["email"], sha1($_POST["pwd"]))){
            header("Location: utilisateur.php");
            exit();
        }
    }
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
        <a href="/blog/admin/categorie/categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="/blog/admin/logout.php"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
    <div class="content">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div id="message" class="alert alert-success" role="alert" style="display:none;">
                    <strong>Utilisateur !</strong> modifiée avec succès!
            </div>
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4>Modifier un utilisateur</h4>
                    </div>
                    <div class="card-body">
                    <form id="userForm" class="needs-validation" novalidate method="POST" action="">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" value="<?= $user["nom"] ?>" id="nom" name="nom" required>
                            <div class="invalid-feedback">Le titre est obligatoire</div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" value="<?= $user["email"] ?>" id="email" name="email" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit">Modifier l'utilisateur</button>
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
    <script src="/blog/assets/js/jquery.min.js"></script>
    <script>
document.getElementById("userForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    let form = this;
    
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
    }

    $.post('', $(this).serialize(), function(response) {
        $('#userForm')[0].reset();
        $('#message').fadeIn().delay(3000).fadeOut();
    });
});
</script>
</body>
</html>
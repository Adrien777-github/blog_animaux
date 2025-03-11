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
    <title>Administration | Mon profil</title>
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
        <a href="/blog/admin/profil.php"><i class="fas fa-user"></i> <span>Mon Profil</span></a>
        <a href="/blog/admin/user/utilisateur.php"><i class="fas fa-users"></i> <span>Listes utilisateurs</span></a>
        <a href="/blog/admin/article/article.php"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="/blog/admin/categorie/categorie.php"><i class="fas fa-folder"></i> <span>Catégories</span></a>
        <a href="/blog/admin/logout.php"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
    <div class="content">
        <h2>Mon profil</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, ducimus. Vitae temporibus, provident deleniti explicabo eos necessitatibus, aut hic optio quibusdam assumenda, repellat recusandae! Ipsa perferendis quisquam eveniet ea deleniti obcaecati animi dolorem natus sit veritatis! Dolorem officiis, repellendus eligendi harum laboriosam, voluptatibus maiores hic labore culpa exercitationem quibusdam fuga sequi distinctio assumenda doloremque nostrum rem illum? Eligendi, exercitationem aut.</p>
    </div>
    <script src="/blog/assets/js/script.js"></script>
</body>
</html>

<?php
require('admin/categorie/controllerCategorie.php');
require('admin/article/controllerArticle.php');
$categories = getCategories($pdo);
$articles = getArticles($pdo);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Animaux</title>
    <link href="/blog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Documentaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Actualité</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catégorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php foreach ($categories as $categorie) : ?>
              <li><a class="dropdown-item" href="#"><?= $categorie["nom"] ?></a></li>
              <?php /*echo $categorie["id"];*/ ?>
            <?php endforeach; ?>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-info me-2" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <a href="login-registration.php" class="btn btn-primary"><i class="fas fa-user"></i> Connexion</a>
    </div>
  </div>
</nav>

<!-- Carrousel image animaux -->
<div class="container">
<div id="carousel-animaux" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicateurs (petits points) -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel-animaux" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel-animaux" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carousel-animaux" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carousel-animaux" data-bs-slide-to="3" aria-label="Slide 4"></button>  
</div>
  
  <!-- Contenu du carrousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/blog/images/tortue.png" class="d-block w-100" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="/blog/images/tigre.png" class="d-block w-100" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="/blog/images/zebre.png" class="d-block w-100" alt="Image 3">
    </div>
    <div class="carousel-item">
      <img src="/blog/images/cameleon.png" class="d-block w-100" alt="Image 4">
    </div>
  </div>
  <!-- Contrôles -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-animaux" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel-animaux" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>

<div class="row justify-content-center">
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
<footer class="text-center mt-5">
        <p>&copy; 2025 Site de Blog pour animaux. Tous droits réservés à Adrien.</p>
        <div>
            <a href="#" class="text-light me-3"><i class="fas fa-facebook"></i></a>
            <a href="#" class="text-light me-3"><i class="fas fa-twitter"></i></a>
            <a href="#" class="text-light"><i class="fas fa-instagram"></i></a>
        </div>
</footer>
</div>
<script src="/blog/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>

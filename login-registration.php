<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Animaux | Connexion | Inscription</title>
    <link href="/blog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 400px;
            margin: 150px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <ul class="nav nav-tabs" id="authTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Connexion</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Inscription</button>
                </li>
            </ul>
            <div class="tab-content mt-3" id="authTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel">
                    <form action="" id="loginForm">
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" name="email" class="form-control" id="loginEmail" required>
                            <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-key"></i> Mot de passe</label>
                            <input type="password" name="mdp" class="form-control" id="loginPassword" required>
                            <div class="invalid-feedback">Veuillez entrer votre mot de passe.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                    </form>
                    <a href="index.php" class="btn btn-secondary w-100 mt-2">Annuler</a>
                </div>
                <div class="tab-pane fade" id="register" role="tabpanel">
                    <form action="" id="registerForm">
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-user"></i> Nom</label>
                            <input type="text" name="nom" class="form-control" id="registerName" required>
                            <div class="invalid-feedback">Veuillez entrer votre nom.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" name="email" class="form-control" id="registerEmail" required>
                            <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-key"></i> Mot de passe</label>
                            <input type="password" name="mdp" class="form-control" id="registerPassword" required>
                            <div class="invalid-feedback">Le mot de passe doit comporter au moins 6 caractères.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-key"></i> Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                            <div class="invalid-feedback">Les mots de passe ne correspondent pas.</div>
                        </div>
                        <button type="submit" class="btn btn-success w-100">S'inscrire</button>
                    </form>
                    <a href="index.php" class="btn btn-secondary w-100 mt-2">Annuler</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let password = document.getElementById('registerPassword');
            let confirmPassword = document.getElementById('confirmPassword');
            
            if (password.value.length < 6) {
                password.classList.add('is-invalid');
            } else {
                password.classList.remove('is-invalid');
            }
            
            if (password.value !== confirmPassword.value) {
                confirmPassword.classList.add('is-invalid');
            } else {
                confirmPassword.classList.remove('is-invalid');
            }
        });
    </script>
</body>
</html>

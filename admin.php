<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Vertical Bootstrap</title>
    <link href="/blog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/fontawesome/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            transition: width 0.3s ease;
        }
        .sidebar.collapsed {
            width: 70px;
        }
        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: flex;
            align-items: center;
            white-space: nowrap;
            overflow: hidden;
            transition: opacity 0.3s ease;
        }
        .sidebar.collapsed a {
            opacity: 1;
        }
        .sidebar i {
            margin-right: 10px;
            font-size: 20px;
        }
        .sidebar.collapsed i {
            margin-right: 0;
            text-align: center;
            width: 100%;
        }
        .sidebar.collapsed span {
            display: none;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }
        .collapsed + .content {
            margin-left: 90px;
        }
        .toggle-btn {
            position: absolute;
            top: 0px;
            right: -7px;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            z-index: 1000;
        }
        .sidebar .toggle-btn {
            width: 100%;
            text-align: right;
            padding-right: 20px;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            .sidebar a span {
                display: none;
            }
            .content {
                margin-left: 90px;
            }
        }
    </style>
</head>
<body>
    <div id="sidebarMenu" class="sidebar d-flex flex-column">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="#"><i class="fas fa-home"></i> <span>Accueil</span></a>
        <a href="#"><i class="fas fa-user"></i> <span>Profil</span></a>
        <a href="#"><i class="fas fa-users"></i> <span>Listes utilisateurs</span></a>
        <a href="#"><i class="fas fa-file"></i> <span>Articles</span></a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span></a>
    </div>
    <div class="content">
        <h2>Contenu principal</h2>
        <p>Bienvenue sur la page avec une barre de navigation verticale sombre.</p>
    </div>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebarMenu').classList.toggle('collapsed');
            document.querySelector('.content').classList.toggle('collapsed');
        }
        
        window.addEventListener('resize', function() {
            if (window.innerWidth <= 768) {
                document.getElementById('sidebarMenu').classList.add('collapsed');
                document.querySelector('.content').classList.add('collapsed');
            } else {
                document.getElementById('sidebarMenu').classList.remove('collapsed');
                document.querySelector('.content').classList.remove('collapsed');
            }
        });
        
        document.addEventListener("DOMContentLoaded", function() {
            if (window.innerWidth <= 768) {
                document.getElementById('sidebarMenu').classList.add('collapsed');
                document.querySelector('.content').classList.add('collapsed');
            }
        });
    </script>
</body>
</html>

<?php session_start(); ?>


<nav class="navbar glass-navbar">
    <div class="container-fluid">
        <div class="navbar-section brand">
            <a class="navbar-brand" href="#">W0RLD.</a>
        </div>
        <div class="navbar-section nav-links">
            <a class="nav-link" href="#">Accueil</a>
            <a class="nav-link" href="#">Boutique</a>
            <a class="nav-link" href="#">Contact</a>
        </div>

        <!-- Système de connexion à droite -->
        <div class="card nav-item-login d-flex align-items-center gap-2">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="me-2">Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <a href="logout.php" class="button-card">Se Déconnecter</a>
            <?php else: ?>
                <a href="signup.php" class="btn-outline-light">S'inscrire</a>
                <a href="login.php" class="btn-outline-light">Se Connecter</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
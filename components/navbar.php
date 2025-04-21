<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar">
    <div class="navbar-container">
        <a href="/fatecMeets/index.php" class="navbar-logo">Fatec Meet</a>

        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>

        <div class="navbar-links">
            <a href="/teste/index.php" class="navbar-item">Página inicial</a>
            <a href="#" class="navbar-item">Buscar</a>
            <a href="/teste/view/Postar.php" class="navbar-item">Postar</a>
            <a href="/teste/view/Perfil.php" class="navbar-item">Perfil</a>
        </div>

        <div class="navbar-user-area">
            <?php if (isset($_SESSION['usuario'])): ?>
                <img src="<?= $_SESSION['usuario']['foto'] ?>" class="profile-img-mini" alt="Perfil">
                <a href="/teste/PHP/logout.php"><button class="profile-btn">Logout</button></a>
            <?php else: ?>
                <a href="/teste/view/login.html"><button class="profile-btn">Login</button></a>
            <?php endif; ?>
        </div>
    </div>
</nav>

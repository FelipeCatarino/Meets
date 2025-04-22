<?php
// Inicie a sessão se ainda não estiver iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




// Defina a URL base do projeto (ajuste conforme necessário)
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']) . '/');

?>

<nav class="navbar">
    <div class="navbar-container">
        <a href="<?= BASE_URL ?>index.php" class="navbar-logo">Fatec Meet</a>

        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>

        <div class="navbar-links">
            <a href="<?= BASE_URL ?>index.php" class="navbar-item">Página inicial</a>
            <a href="#" class="navbar-item">Buscar</a>
            <a href="<?= BASE_URL ?>view/Postar.php" class="navbar-item">Postar</a>
            <a href="<?= BASE_URL ?>view/Perfil.php" class="navbar-item">Perfil</a>
        </div>

        <div class="navbar-user-area">
            <?php if (isset($_SESSION['usuario'])): ?>
                <img src="<?= htmlspecialchars($_SESSION['usuario']['foto']) ?>" class="profile-img-mini" alt="Perfil">
                <a href="<?= BASE_URL ?>PHP/logout.php"><button class="profile-btn">Logout</button></a>
            <?php else: ?>
                <a href="<?= BASE_URL ?>view/Login.html"><button class="profile-btn">Login</button></a>
            <?php endif; ?>
        </div>
    </div>
</nav>

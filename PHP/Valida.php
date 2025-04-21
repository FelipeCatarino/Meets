<?php
session_start();
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conexao->prepare("SELECT id, nome, email, foto, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario'] = [
                'id' => $usuario['id'],
                'nome' => $usuario['nome'],
                'email' => $usuario['email'],
                'foto' => $usuario['foto'] ?? 'https://i.pravatar.cc/150?img=32'
            ];

            // 🔁 Aqui é o redirecionamento para a página com todos os benefícios de logado
            header("Location: /teste/index.php");
            exit;
        }
    }

    // Se não conseguir logar
    header("Location: ../login.html?erro=1");
    exit;
} else {
    header("Location: ../login.html");
    exit;
}

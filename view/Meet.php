<?php 
    session_start(); 
    include '../components/navbar.php'; 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Evento - Fatec Meet</title>
    <link rel="stylesheet" href="css/estilo-feeds.css">
    <style>
        .meet-container {
            max-width: 800px;
            margin: 80px auto 30px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .meet-image {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
            object-fit: cover;
            max-height: 400px;
        }

        .meet-title {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #fe3632;
        }

        .meet-description {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .meet-buttons {
            display: flex;
            gap: 15px;
        }

        .meet-buttons button {
            background-color: #fe3632;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }

        .meet-buttons button:hover {
            background-color: #d02c29;
        }
    </style>
</head>
<body>

<div class="meet-container">
    <img src="imagens/post1.jpg" alt="Imagem do Evento" class="meet-image">

    <h1 class="meet-title">Reunião do Grupo de ADM</h1>

    <p class="meet-description">
        Nesta reunião discutiremos as metas e diretrizes do projeto integrador. 
        Tragam laptops, ideias e disposição! Participação vale pontos extras.
    </p>

    <div class="meet-buttons">
        <button onclick="confirmarPresenca()">Confirmar Presença</button>
        <button onclick="curtirPost()">Curtir ❤️</button>
    </div>
</div>

<script>
    function confirmarPresenca() {
        alert("Presença confirmada com sucesso!");
    }

    function curtirPost() {
        alert("Você curtiu este post!");
    }
</script>

</body>
</html>

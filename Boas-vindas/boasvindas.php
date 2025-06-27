<?php
session_start();

if (isset($_COOKIE["nome"]) && isset($_SESSION["idade"])) {
    $nome = $_COOKIE["nome"];
    $idade = $_SESSION["idade"];
} else {
    echo "Dados não encontrados.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boas-vindas</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <div class="container">
        <h2>Olá, <?php echo htmlspecialchars($nome); ?>!</h2>
        <p>Você tem <?php echo htmlspecialchars($idade); ?> anos.</p>
    </div>

    </body>
</html>

<?php
$id = $_POST['id'] ?? null;
$nota = $_POST['nota'] ?? null;

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($id && $nota >= 1 && $nota <= 5) {
        $mensagem = "Obrigado por avaliar o Produto $id com a nota $nota.";
    } else {
        $mensagem = "Dados inválidos. Certifique-se de escolher uma nota entre 1 e 5.";
    }
} else {
    $mensagem = "Acesso inválido.";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Resultado da Avaliação</title>
        <style>
            body {
                font-family: 'Segoe UI', sans-serif;
                background: linear-gradient(to right, #16222A, #3A6073);
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .mensagem {
                background-color: rgba(255,255,255,0.1);
                padding: 30px;
                border-radius: 10px;
                text-align: center;
                font-size: 20px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            }

            .voltar {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #ffffff33;
                color: #fff;
                text-decoration: none;
                border: 1px solid #fff;
                border-radius: 5px;
                transition: background 0.3s;
            }

            .voltar:hover {
                background-color: #ffffff55;
            }
        </style>
    </head>
    <body>
        <div class="mensagem">
            <?= htmlspecialchars($mensagem) ?><br>
            <a class="voltar" href="listar_produtos.php">Voltar para lista de produtos</a>
        </div>
    </body>
</html>

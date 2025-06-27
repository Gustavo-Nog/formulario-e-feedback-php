<?php
if (!isset($_GET['id'])) {
    echo "Produto não encontrado.";
    exit;
}

$idProduto = (int) $_GET['id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Avaliar Produto</title>
        <style>
            body {
                margin: 0;
                font-family: 'Segoe UI', sans-serif;
                background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
                color: #ffffff;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            h1 {
                margin-bottom: 20px;
            }

            form {
                background-color: rgba(255, 255, 255, 0.1);
                padding: 30px;
                border-radius: 12px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.3);
                width: 300px;
            }

            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }

            select {
                width: 100%;
                padding: 8px;
                border-radius: 6px;
                border: none;
                background-color: #ffffff;
                color: #333;
                font-size: 16px;
            }

            button {
                margin-top: 20px;
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 6px;
                background-color: #00c6ff;
                color: #fff;
                font-size: 16px;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            button:hover {
                background-color: #0072ff;
            }
        </style>
    </head>
    <body>
        <h1>Avaliação do Produto ID <?= $idProduto ?></h1>

        <form action="processar_nota.php" method="POST">
            <input type="hidden" name="id" value="<?= $idProduto ?>">

            <label for="nota">Dê uma nota de 1 a 5:</label>
            <select name="nota" id="nota" required>
                <option value="">Selecione</option>
                <option value="1">1 - Péssimo</option>
                <option value="2">2 - Ruim</option>
                <option value="3">3 - Regular</option>
                <option value="4">4 - Bom</option>
                <option value="5">5 - Excelente</option>
            </select>

            <button type="submit">Enviar Avaliação</button>
        </form>
    </body>
</html>

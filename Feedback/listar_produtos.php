<?php
$produtos = [
    1 => "Notebook 15 polegadas",
    2 => "Smartphone Android",
    3 => "Fone de ouvido sem fio",
    4 => "Mouse com fio",
    5 => "Monitor LED 24 polegadas",
    6 => "Teclado mecânico",
    7 => "Impressora multifuncional",
    8 => "HD Externo 1TB",
    9 => "Webcam Full HD",
    10 => "Caixa de som Bluetooth",
    11 => "Tablet 10 polegadas",
    12 => "Pen Drive 64GB",
    13 => "Carregador portátil",
    14 => "Adaptador USB-C para HDMI",
    15 => "Suporte para notebook"
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Produtos</title>
        <style>
            body {
                font-family: 'Segoe UI', sans-serif;
                background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
                color: #fff;
                padding: 40px;
            }

            h1 {
                text-align: center;
                margin-bottom: 30px;
            }

            ul {
                max-width: 600px;
                margin: 0 auto;
                padding: 0;
                list-style: none;
            }

            li {
                background: rgba(255, 255, 255, 0.1);
                margin-bottom: 10px;
                padding: 15px 20px;
                border-radius: 10px;
                transition: background 0.3s;
            }

            li:hover {
                background: rgba(255, 255, 255, 0.2);
            }

            a {
                text-decoration: none;
                color: #ffffff;
                font-size: 18px;
                display: block;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <h1>Escolha um produto para avaliar:</h1>
        <ul>
            <?php foreach ($produtos as $id => $nome): ?>
                <li>
                    <a href="avaliar_produto.php?id=<?= $id ?>">
                        <?= htmlspecialchars($nome) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

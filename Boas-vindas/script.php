<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    setcookie("nome", $nome, time() + 86400, "/"); 

    $_SESSION["idade"] = $idade;


    header("Location: boasvindas.php");
    exit();
} else {
    echo "Acesso inválido.";
}
?>

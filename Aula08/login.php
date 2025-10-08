<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informações</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="cpf">CPF:</label>
        <input type="number" id="cpf" name="cpf" required><br><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>
        <button type="submit" value="Enviar">Enviar</button>
</body>
</html>
<?php
$dbHost = 'localhost';
$dbName = 'Banco';
$dbuser = 'root';
$dbpass = '';         
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];
}

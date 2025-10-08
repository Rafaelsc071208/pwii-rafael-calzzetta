<?php
$dbHost = 'localhost';
$dbName = 'Banco';
$dbuser = 'root';
$dbpass = '';   

try {
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, nome, cpf, idade FROM usuarios";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>CPF</th><th>Idade</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["cpf"] . "</td><td>" . $row["idade"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

?>
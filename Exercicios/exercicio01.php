<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <form method="post">
        Km rodado: <input type="number" name="num1" required><br><br>
        Litros: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Ok">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $resulatado = $num1 / $num2;
        echo "A média de litros usados é " . $resulatado . "L<br>";  
    

    }
    ?>
</body>
</html>

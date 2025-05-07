<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <form method="post">
        Altura: <input type="number" name="num1" required> cm<br><br>
        Largura: <input type="number" name="num2" required> cm<br><br>
        Profundidade: <input type="number" name="num3" required> cm<br><br>

        <input type="submit" value="Ok">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $resulatado = $num1 * $num2 * $num3;    
        echo "O volume da caixa é " . $resulatado . " cm³<br>";  
    

    }
    ?>
</body>
</html>

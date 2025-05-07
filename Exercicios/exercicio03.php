<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <form method="post">
        Base maior: <input type="number" name="num1" required> cm<br><br>
        Base menor: <input type="number" name="num2" required> cm<br><br>
        Altura: <input type="number" name="num3" required> cm<br><br>
        <input type="submit" value="Ok">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $resulatado = (($num1 + $num2)*$num3) / 2;
        echo "A medida do trapézio é " . $resulatado . " cm²<br>";  
    

    }
    ?>
</body>
</html>

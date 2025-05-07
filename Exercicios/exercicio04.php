<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <form method="post">
        Preço do produto: R$<input type="number" name="num1" required> <br><br>


        <input type="submit" value="Ok">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];


        $resulatado = ((($num1/100)*16)+$num1)/10;    
        echo "O preço de uma das 10 parcelas do produto 16% mais caro é R$" . $resulatado . "<br>";  
    

    }
    ?>
</body>
</html>

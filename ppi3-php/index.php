<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saldo</title>
</head>
<body>
    <p>Hello World!</p>
    <?= "Hello World!"; ?>
    <?php
    $saldoEmBanco = 9;
    // $saque = 60;
    $saque = $_GET["valor"];

    echo $saldoEmBanco>=$saque? 
        "Saque realizado":"Saldo insuficiente";
    ?>
    <form action="index.php">
        <div>
            <label for="txtValor">Valor a sacar</label>
            <input type="text" name="valor" id="txtValor">
        </div>
        <div>
            <label for="txtParagrafo">Quantidade de parágrafos</label>
            <input type="text" name="par" id="txtParagrafo">
        </div>
        <?php
            //$p = $_GET["par"];
            //for ($i = 0; $i < $p; $i++){
               // echo "<p>$i</p>";
           // }
        ?> 
        <?php
            $p = $_GET["par"];
            for ($i = 1; $i <= $p; $i++){
        ?>
            <p>Paragrafo numero: <?=$i;?></p>
        <?php
            }
        ?>
    
        <input type="submit" value="Sacar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php
        echo "Categorias dos atletas por idade";
        $idade = $_GET["age"];

        if($idade >= 12 && $idade <= 13){
            echo "Sua categoria é Mirim";
        } else if ($idade == 14){
            echo "Sua categoria é infantil";
        } else if($idade == 15){
            echo "escola sua categoria:";
    ?>
        <form action="">
            <div>
                <label for="Infantil"> Infantil</label>
                <input type="checkbox" name="Infantil" id="Infantil">
                <label for="Infanto-Juvenil"> Infanto-Juvenil</label>
                <input type="checkbox" name="Infanto-Juvenil" id="Infanto-Juvenil">
            </div>
            
        </form>
    <?php
        } else if($idade == 16){
            echo "Sua categoria é infanto-juvenil"; 
    ?>
    <?php
        } else if($idade == 17){
            echo "escola sua categoria:";
    ?>
    <form action="">
        <div>
            <label for="Infantil"> Junior</label>
            <input type="checkbox" name="Infantil" id="Infantil">
            <label for="Infanto-Juvenil"> Juniorl</label>
            <input type="checkbox" name="Infanto-Juvenil" id="Infanto-Juvenil">
        </div>
    </form>
    <?php
        } else if($idade >= 18 && $idate <= 19){
            echo "Sua categoria é infanto-juvenil";
        } else if($idade > 20){
            echo "Sua categoria é infanto-juvenil";
        } else {
            echo "Infelizmente você não está matriculado no IFRN-SC";
        }
    ?>
</body>
</html>
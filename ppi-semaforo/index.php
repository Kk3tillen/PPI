<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            background-color: #0000CD; /* Cor de fundo */
            width: 200px; /* Largura */
            height: 200px; /* Altura */
            border-radius: 100px;
        }
        .verde {
            background-color: #00FF00; /* Verde */
        }

        .vermelha {
            background-color: #FF0000; /* Vermelha */
        }

        .amarelo {
            background-color: #FFD700; /* Amarela */
        }
        section{
            display: grid;
            text-align:center;
            justify-content: center;
        }
        h1{
            text-align:center;
        }

</style>
</head>
<body>
    <h1>O semáforo indica</h1>
    <section>
    <?php
        $color = $_GET["color"];

        if($color == "verde"){
            echo "Avance";
    ?>
         <div class="verde"></div>
    <?php } else if ($color == "vermelho"){
            echo "Pare";
    ?>  
    <div class="vermelha"></div>
    <?php } else if ($color == "amarelo"){
            echo "Diminua";
    ?>  
    <div class="amarelo"></div>
    <?php } else {
            echo "Informe uma cor";
    ?>
     <div></div>
    <?php }
    ?>
    </section>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu programinha PHP</title>
</head>
<body>
    <h1>Isso é html</h1>
    <?php

    $dia = "terça";
    $temperatura = 30;
 
    if($temperatura >= 25){
        $clima = "quente";
    }else{
        $clima ="frio";
    }
    echo "Hoje dia está $clima, $dia feira está fazendo $temperatura graus" ; 
    echo "<br>";

    $nomes = array("Eloyse Vitória", "Eyshila Kamilly", "Elizabeth", "Ágata", "Aquiles");

    echo "<br>";

    for($i=0; $i <= 4; $i++){
        echo "<br>";
        echo $nomes[$i];
    };

    echo "<br><hr>";
    
    foreach ($nomes as $nome) {
        echo "<br>";
        echo $nome;
    }
    
    ?>
</body>
</html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <h1> Média dos alunos do 3A Sesi Moreno </h1>
    <?php

    $nota1 = 10;
    $nota2 = 6;
    $nota3 = 8;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "sua média é igual a $media";

    if ($media >= 8) {
        echo "<br>";
        echo "<h4 style='color: green' >
        Você foi aprovado !</h4>";
    }else{
        echo "<br>";
        echo "<h4 style='color: red' >
        mais sorte no próximo ano</h4>";
    }
        


    ?>
</body>
</html>
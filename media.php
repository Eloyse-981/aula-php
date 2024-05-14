<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    
    <h1> Média dos alunos do 3A Sesi Moreno </h1>
    <?php

    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "<h3> sua média é igual a $media <h3>";

    if ($media >= 8) {
        echo "<br>";
        echo "<h1 style='color: green' >
        Você foi aprovado !</h1>";
    }else{
        echo "<br>";
        echo "<h3 style='color: red' >
        mais sorte no próximo ano</h3>";
    }
        


    ?>
</body>
</html>
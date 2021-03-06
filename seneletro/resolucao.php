<?php

    $nome = $_GET["nome"];
    $endereco = $_GET["endereco"];
    $numero = $_GET["numero"];
    $consumo = $_GET["consumo"];

    if($consumo > 120){
        $valorConsumo = $consumo * 0.42;
    } else{
        $valorConsumo = $consumo * 0.32;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <link rel="stylesheet" href="./styles.css" />
    <title>Seneletro</title>
</head>
<body>
    <div class="luz">
        <h1>Conta de luz de <?=$nome?></h1>
        <p><?=$endereco?>, <?=$numero?></p>
        <h2>Consumo: <?=$consumo?>kWh</h2>
        <h1>Valor a pagar: R$ <em><?= number_format($valorConsumo, 2, ",", ".")?></em></h1>
        <?php
            if($consumo <=120){ 
        ?>
            <h2>Obrigado por economizar!</h2>
        <?php
            }
        ?>
    </div>
</body>
</html>
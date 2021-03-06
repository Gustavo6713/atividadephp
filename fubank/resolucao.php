<?php

    const VALOR_10 = 1.1;
    const VALOR_20 = 1.2;

    $funcionario = $_GET["funcionario"];
    $salario = $_GET["salario"];

    $aumento10 = $salario * VALOR_10;
    $aumento20 = $salario * VALOR_20;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Fullbank</title>
</head>

<body>
    <?php
        if($aumento10 > 5000){
    ?>
        <h1><?= $funcionario ?> passará a receber R$ <em><?= number_format($aumento10, 2, ",", ".")?></em></h1>
    <?php
        } else{
    ?>
        <h1><?= $funcionario ?> passará a receber R$ <em><?= number_format($aumento20, 2, ",", ".")?></em></h1>
    <?php
        }
    ?>
</body>
</html>


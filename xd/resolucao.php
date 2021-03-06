<?php
  const MOEDA_DOLAR = 5.41;
  const MOEDA_EURO = 6.57;

  $valorReal = $_GET["real"];
  $conversaoMoeda = $_GET["moeda"];

  if($conversaoMoeda == "dolar") {
      $conversaoFinal = $valorReal / MOEDA_DOLAR;
  } else{
      $conversaoFinal = $valorReal / MOEDA_EURO;
  }
  
?>

<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>XD Investimentos</title>
</head>

<body>
    <h1>Valor total em <?= $conversaoMoeda ?>: <em><?= number_format($conversaoFinal, 2, ",", ".") ?></em></h1>
</body>
</html> 
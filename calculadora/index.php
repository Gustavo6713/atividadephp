<?php

  $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : NULL;
  $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : NULL;
  $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : NULL;
  
  switch ($operacao) {
    case '+':
      $resultado = $numero1 + $numero2;
      break;
    case '-':
      $resultado = $numero1 - $numero2;
      break;
    case '/':
      if($numero2 == 0){
        $resultado = "O dividendo não pode ser zero";
      }else{
        $resultado = $numero1 / $numero2;
      }
      break;
    case '*':
      $resultado = $numero1 * $numero2;
      break;
    
    default:
      $resultado = NULL;
      break;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
  <link rel="stylesheet" href="styles-global.css" />
</head>

<body>
  <form method="POST" action="index.php">
    <div class="input-group">
      <labal for="resultado">RESULTADO</labal>
      <input type="text" id="resultado" readonly value="<?= $resultado ?>" />
    </div>

    <div class="input-group">
      <labal for="numero1">Número 1</labal>
      <input type="number" name="numero1" id="numero1" />
    </div>
    <div class="input-group">
      <labal for="numero1">Número 2</labal>
      <input type="number" name="numero2" id="numero2" />
    </div>
    <div>
      <input type="radio" id="soma" name="operacao" value="+" />
      <label for="soma">Somar</label>

      <input type="radio" id="subtracao" name="operacao" value="-" />
      <label for="subtracao">Subtração</label>

      <input type="radio" id="divisao" name="operacao" value="/" />
      <label for="divisao">Divisao</label>

      <input type="radio" id="multiplicacao" name="operacao" value="*" />
      <label for="multiplicacao">Multiplicação</label>
    </div>

    <button>Calcular</button>
  </form>
</body>

</html>
<?php
  $quantidade = $_POST['quantidade'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Informe as notas</title>
</head>
<body>
  <form>
    <?php
      for($i = 1; $i <= $quantidade; $i++){
    ?>
      <div class="input-group">
        <label for="nota<?= $i ?>">Digite a nota <?= $i ?></label>
        <input type="number" min="0" max="100" name="nota<?= $i ?>" id="nota<?= $i ?>" />
      </div>
    <?php
      }
    ?>
    <button>Calcular</button>
  </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Fullbank</title>
</head>

<body>
  <!-- Colocar o formulário --> 
  <form method="GET" action="resolucao.php">
    <h1>Sálario</h1>
    <div class="input-group">
      <label for="funcionario">Funcionário</label>
      <input type="text" id="funcionario" name="funcionario" placeholder="Digite o nome aqui" required/>
    </div>
    <div class="input-group">
      <label for="salario">Salário Atual</label>
      <input type="number" id="salario" name="salario" placeholder="Digite o salário aqui" required/>
    </div>
    <button>Calcular</button>
    <button type="reset">Limpar</button>
  </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Seneletro </title>
</head>

<body>
  <!-- Colocar o formulário -->
  <form action="resolucao.php">
    <h1>Consulta conta de luz</h1>
    <div class="input-group">
      <label>Nome</label>
      <input type="text" id="nome" name="nome" placeholder="Nome Completo" required/>
    </div>
    <div class="input-group">
      <label>Endereço</label>
      <input type="text" id="endereco" name="endereco" placeholder="Endereço" required/>
    </div>
    <div class="input-group">
      <label>Número</label>
      <input type="number" min="0" step="1" id="numero" name="numero" required/>
    </div>
    <div class="input-group">
      <label>Consumo</label>
      <input type="number" min="0" id="consumo" name="consumo" placeholder="Quilowatts-hora" required/>
    </div>
    <button>Consultar</button>
    <button type="reset">Limpar</button>
  </form>
</body>

</html>
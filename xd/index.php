<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>XD Investimentos</title>
</head>

<body>
  <!-- Colocar o formulário -->
  <form action="resolucao.php">
    <h1>Convertor</h1>
    <div class="input-group">
      <label>R$</label>
      <input type="number" min="0" id="real" name="real" placeholder="Digite aqui em Reais " />
    </div>
    <div>
      <input type="radio" id="moeda" name="moeda" value="dolar" />
      <label>Dólar</label>
      <input type="radio" id="moeda" name="moeda" value="euro" />
      <label>Euro</label>
    </div>
    <button>Converter</button>
  </form>
</body>

</html>
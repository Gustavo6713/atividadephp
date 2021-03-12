<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Nota</title>
</head>
<body>
    <form method="POST" action="notas.php">
        <div class="input-group">
            <label for="quantidade">Informe um numero</label>
            <input type="number" min="1" max="10" name="quantidade" id="quantidade"/>
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>
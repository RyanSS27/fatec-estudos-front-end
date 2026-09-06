<?php
    require_once 'avalia-numero.php';   
    $resposta = "";

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
        $resposta = AvaliaNumero(intval($_POST["numero"]));
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando um Número Inteiro</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="card">
        <h1>Análise de Número</h1>

        <form method="post" action="form.php">
            <div class="form-group">
                <label for="numero">Digite um número inteiro:</label>
                <input type="number" id="numero" name="numero" step="1" required placeholder="Ex: -9">
            </div>

            <button type="submit">Analisar</button>
        </form>

        
        <div class="resultado">
            <p>Resultado: <?php echo $resposta ?></p>
        </div>
    </div>
</body>
</html>
<?php
    require_once 'regra-multa.php';

    $resposta = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['limite']) && isset($_POST['velocidade'])) {
        $resposta = IdentificaInfracao(
            intval($_POST['limite']),
            intval($_POST['velocidade'])
        );
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identifica Multa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="card">
        <h1>Multa de Trânsito</h1>
        
        <form method="post" action="form.php">
            <div class="form-group">
                <label for="limite">Velocidade Permitida (km/h):</label>
                <input type="number" id="limite" name="limite" step="1" min="1" required placeholder="Ex: 80">
            </div>

            <div class="form-group">
                <label for="velocidade">Velocidade do Carro (km/h):</label>
                <input type="number" id="velocidade" name="velocidade" step="1" min="0" required placeholder="Ex: 95">
            </div>

            <button type="submit">Verificar Infração</button>
        </form>

        <div class="resultado">
            <p>Resultado: <?php echo $resposta ?></p>
        </div>
    </div>
</body>
</html>
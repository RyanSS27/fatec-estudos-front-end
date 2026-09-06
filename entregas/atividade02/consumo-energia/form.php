<?php
    require_once  'regra-tarifaria.php';
    $valorfinal = "";

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kwh'])) {
        $kwh = floatval($_POST['kwh']);
        $valorfinal = CalculaTarifa($kwh);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cálculo tarifa de consumo</title>
</head>
<body>
    <div class="card">
        <h1>Cálculo de Tarifa</h1>

        <form method="post" action="form.php">
            <div class="form-group">
                <label for="kwh">Consumo de Energia (kWh):</label>
                <input type="number" id="kwh" name="kwh" step="0.01" min="0" required placeholder="Ex: 250">
            </div>

            <button type="submit">Calcular Tarifa</button>
        </form>

        <div class="resultado">
            <p>Resultado: <?php echo $valorfinal ?>
        </div>
    </div>    
</body>
</html>

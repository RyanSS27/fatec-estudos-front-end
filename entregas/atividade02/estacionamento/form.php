<?php
    require_once 'calcula-estacionamento.php';
    $resposta = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tipo"]) && isset($_POST["horas"])) {
        $resposta = CalculaEstacionamento(
            intval($_POST["tipo"]),
            floatval($_POST["horas"])
        );
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="card">
        <h1>Cálculo de Estacionamento</h1>

        <form method="post" action="form.php">
            <div class="form-group">
                <label for="tipo">Tipo de Veículo:</label>
                <select id="tipo" name="tipo" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="1">1 - Moto (R$ 5,00/h)</option>
                    <option value="2">2 - Carro (R$ 8,00/h)</option>
                    <option value="3">3 - Caminhão (R$ 12,00/h)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="horas">Horas Estacionadas:</label>
                <input type="number" id="horas" name="horas" step="0.5" min="0.5" required placeholder="Ex: 3">
            </div>

            <button type="submit">Calcular Total</button>
        </form>

        <div class="resultado">
            <p>Resultado: <?php echo $resposta; ?></p>
        </div>
    </div>
</body>
</html>
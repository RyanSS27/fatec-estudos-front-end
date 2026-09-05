<?php
// 1. Inicializamos as variáveis vazias para não dar erro na tela
$valor = '';
$parcelas = '';
$resultado = '';

// 2. Verificamos se o formulário foi enviado (quando o usuário clica em "Calcular")
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['valor'], $_POST['parcelas'])) {
    $valor = (float) $_POST['valor'];
    $parcelas = (int) $_POST['parcelas'];

    if ($parcelas > 0) {
        $valorParcela = $valor / $parcelas;

        for ($i = 1; $i <= $parcelas; ++$i) {
            $resultado .= "<div class='list-group-item'>";
            $resultado .= $i . 'x de R$ ' . number_format($valorParcela, 2, ',', '.');
            $resultado .= '</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simulador de Parcelamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="mb-4">Simulador de Parcelamento</h2>

            <!-- action="" faz o formulário enviar os dados para a própria página -->
            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">Valor da compra (R$):</label>
                    <input
                        type="number"
                        name="valor"
                        class="form-control"
                        step="0.01"
                        value="<?php echo $valor; ?>"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Número de parcelas: </label>
                    <input
                        type="number"
                        name="parcelas"
                        class="form-control"
                        min="1"
                        value="<?php echo $parcelas; ?>"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    Calcular
                </button>
            </form>

            <!-- Mostra o resultado somente se ele já tiver sido calculado -->
            <?php if ($resultado != '') { ?>
                <hr>
                <h5>Parcelamento:</h5>
                <div class="list-group">
                    <?php echo $resultado; ?>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
</body>
</html>
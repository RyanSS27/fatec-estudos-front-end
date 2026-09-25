<?php
// Importa o doc com o back
require_once 'logica-prova.php';

$resposta = "";

// Esse if testa se a página foi recarreda através do post do form
// o isset() testa se os parâmetros foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["campo"]) && isset($_POST["opcao"])) {

    // Chama as funções que estiverem no doc de backend passando os valores do form
    // $resposta = FuncaoBala( $_POST["campo"], $_POST["opcao"]);

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo Bootstrap</title>
    <!-- Link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100 p-3" style="background-color: #363636;">

    <div class="card p-4 shadow w-100 border-0" style="max-width: 450px; background-color: #fff; border-radius: 8px;">
        <h1 class="h4 text-center text-dark mb-4">Título do Exercício</h1>

        <!-- O action aponta para o próprio arquivo para recarregar a página -->
        <form method="post" action="form2.php">
            <div class="mb-3">
                <label for="campo" class="form-label fw-bold">Digite um valor:</label>
                <input type="text" class="form-control" id="campo" name="campo" required>
            </div>

            <div class="mb-3">
                <label for="opcao" class="form-label fw-bold">Selecione a opção:</label>
                <select class="form-select" id="opcao" name="opcao" required>
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="1">Opção 1</option>
                    <option value="2">Opção 2</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold py-2 mt-2" style="background-color: #0056b3; border: none;">
                Calcular
            </button>
        </form>

        <div class="mt-4 pt-3 border-top text-center fw-bold text-dark">
            <p class="mb-0">Resultado: <?php echo $resposta; ?></p>
        </div>
    </div>

</body>
</html>
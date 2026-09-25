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
    <title>Exercício Prova</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card">
        <h1>Título do Exercício</h1>

        <!-- O action aponta para o próprio arquivo para recarregar a página -->
        <form method="post" action="prova.php">

            <div class="form-group">
                <label for="campo1">Digite os valores (separados por vírgula):</label>
                <input type="text" id="campo1" name="campo1" required>
            </div>


            <div class="form-group">
                <label for="categoria">Selecione uma categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="1">Opção 1</option>
                    <option value="2">Opção 2</option>
                    <option value="3">Opção 3</option>
                </select>
            </div>

            <button type="submit">Processar</button>
        </form>

        <div class="resultado">
            <p>Resultado: <?php echo $resposta; ?></p>
        </div>
    </div>
</body>

</html>
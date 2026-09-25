<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Cadastro de Produto</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="index.php?acao=salvar">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="number" step="0.01" name="preco" class="form-control" required>
            </div>

            <button class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</body>

</html>
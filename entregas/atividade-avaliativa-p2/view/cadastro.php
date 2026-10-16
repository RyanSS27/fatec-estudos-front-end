<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastro de Produto</h2>
        <form action="index.php?action=cadastrar" method="POST" class="w-50 mt-3">
            <div class="mb-3">
                <label class="form-label">Nome do Produto:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Preço:</label>
                <input type="text" name="preco" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Categoria:</label>
                <select name="id_categoria" class="form-select" required>
                    <option value="1">Bebidas</option>
                    <option value="2">Padaria</option>
                    <option value="3">Limpeza</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="index.php?action=menu" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>
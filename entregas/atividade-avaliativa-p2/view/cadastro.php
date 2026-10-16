<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glass-container container-sm">
        <h2 class="text-center mb-4 text-white">Cadastro de <span class="text-accent">Produto</span></h2>
        <form action="index.php?action=cadastrar" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" class="form-control custom-input" required>
            </div>
            
            <div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input type="text" id="preco" name="preco" class="form-control custom-input" required>
            </div>
            
            <div class="mb-4">
                <label for="id_categoria" class="form-label">Categoria:</label>
                <select id="id_categoria" name="id_categoria" class="form-select custom-input" required>
                    <option value="1">Bebidas</option>
                    <option value="2">Padaria</option>
                    <option value="3">Limpeza</option>
                </select>
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-accent">Cadastrar</button>
                <a href="index.php?action=menu" class="btn btn-outline-light">Voltar ao Menu</a>
            </div>
        </form>
    </div>
</body>
</html>
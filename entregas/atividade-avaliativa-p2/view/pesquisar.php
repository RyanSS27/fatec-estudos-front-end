<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pesquisar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Pesquisar Produto</h2>
        
        <form action="index.php?action=pesquisar" method="POST" class="w-50 mt-3">
            <div class="input-group mb-3">
                <input type="text" name="nome" class="form-control" placeholder="Informe o nome do produto" required>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </form>

        <?php if (isset($produtos)): ?>
            <?php if (count($produtos) > 0): ?>
                <table class="table table-striped table-bordered mt-4">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome do Produto</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produtos as $p): ?>
                        <tr>
                            <td><?= $p['nome'] ?></td>
                            <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                            <td><?= $p['categoria'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-warning mt-4">Nenhum produto foi localizado.</div>
            <?php endif; ?>
        <?php endif; ?>
        
        <br>
        <a href="index.php?action=menu" class="btn btn-secondary mt-3">Voltar ao Menu</a>
    </div>
</body>
</html>
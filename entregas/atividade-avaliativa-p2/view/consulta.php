<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Produtos Cadastrados</h2>
        <table class="table table-striped table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['nome'] ?></td>
                    <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                    <td><?= $p['categoria'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php?action=menu" class="btn btn-secondary">Voltar ao Menu</a>
    </div>
</body>
</html>
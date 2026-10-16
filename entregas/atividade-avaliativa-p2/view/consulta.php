<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glass-container container-md">
        <h2 class="text-center mb-4 text-white">Produtos <span class="text-accent">Cadastrados</span></h2>
        
        <div class="table-responsive">
            <table class="table custom-table table-striped table-bordered text-center align-middle mt-3">
                <thead class="custom-table-dark">
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
        </div>
        
        <div class="text-center mt-4">
            <a href="index.php?action=menu" class="btn btn-outline-light px-4">Voltar ao Menu</a>
        </div>
    </div>
</body>
</html>
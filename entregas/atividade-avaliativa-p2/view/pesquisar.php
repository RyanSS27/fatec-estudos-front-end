<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glass-container container-md">
        <h2 class="text-center mb-4 text-white">Pesquisar <span class="text-accent">Produto</span></h2>
        
        <form action="index.php?action=pesquisar" method="POST" class="mb-4">
            <div class="mb-3 text-start">
                <label for="nomePesquisa" class="form-label">Nome do Produto:</label>
                <div class="input-group">
                    <input type="text" id="nomePesquisa" name="nome" class="form-control custom-input" placeholder="Informe o nome do produto..." required>
                    <button type="submit" class="btn btn-accent px-4">Pesquisar</button>
                </div>
            </div>
        </form>

        <?php if (isset($produtos)): ?>
            <?php if (count($produtos) > 0): ?>
                <div class="table-responsive">
                    <table class="table custom-table table-striped table-bordered text-center align-middle">
                        <thead class="custom-table-dark">
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
                </div>
            <?php else: ?>
                <div class="alert text-center custom-alert">
                    Nenhum produto foi localizado.
                </div>
            <?php endif; ?>
        <?php endif; ?>
        
        <div class="text-center mt-3">
            <a href="index.php?action=menu" class="btn btn-outline-light px-4">Voltar ao Menu</a>
        </div>
    </div>
</body>
</html>
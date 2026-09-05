<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pokémons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
 
<div class="container mt-5">
    <div class="card p-4 shadow">
 
        <h3 class="mb-3">Lista de Pokémons</h3>
 
        <?php  
        $url = "https://pokeapi.co/api/v2/pokemon?limit=10";
        $resposta = file_get_contents($url); // vai abrir o link e pegar o conteudo
 
        $dados = json_decode($resposta, true); // conversão de json para array
 
        echo "<ul class='list-group'>";
 
        foreach ($dados['results'] as $pokemon) {
            echo "<li class='list-group-item'>";
            echo ucfirst($pokemon['name']); //deixa a primeira letra maiúscula
            echo "</li>";
        }
 
        echo "</ul>";
        ?>
 
    </div>
</div>
 
</body>
</html>
<?php

// 1. CRIAR E ADICIONAR ELEMENTOS
$pessoa = [
    "nome" => "Ana",
    "idade" => 25
];

$pessoa["cidade"] = "São Paulo"; // Adiciona a nova chave "cidade" com o valor


// 2. REMOVER COM unset()
unset($pessoa["idade"]); // Remove a chave "idade" sem alterar as outras


// 3. BUSCAR CHAVE PELO VALOR
$chave = array_search("São Paulo", $pessoa); 
// Retorna o nome da chave em texto: "cidade"


// 4. VERIFICAR SE EXISTE
$temChave = isset($pessoa["nome"]);    // Retorna true se a chave "nome" existe
$temValor = in_array("Ana", $pessoa);  // Retorna true se o valor "Ana" existe


// 5. ORDENAÇÃO
asort($pessoa); // Ordena pelos VALORES e MANTÉM as chaves em texto
ksort($pessoa); // Ordena alfabeticamente pelas CHAVES ("cidade", "nome")

// ATENÇÃO: Nunca use sort() em associativos, pois ele apaga as chaves em texto!


// 6. PERCORRER COM foreach
foreach ($pessoa as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}
// Saída:
// cidade: São Paulo
// nome: Ana

?>
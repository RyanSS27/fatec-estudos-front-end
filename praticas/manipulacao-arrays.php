<?php

// 1. Converter string do input em array
$numeros = explode(",", "10, 20, 30, 40, 50"); // [10, 20, 30, 40, 50]


// 2. REMOVER POR ÍNDICE
unset($numeros[1]); // Remove o item no índice 1 (20)

// Reorganiza as chaves do array (corrige buracos nos índices: 0, 1, 2...)
$numeros = array_values($numeros); 


// 3. REMOVER POR VALOR (Sem saber o índice)
$posicao = array_search("40", $numeros); // Acha a posição do item "40"

if ($posicao !== false) {
    unset($numeros[$posicao]);          // Remove o item encontrado
    $numeros = array_values($numeros);  // Reorganiza os índices
}


// 4. Adicionar elemento no final
$numeros[] = 60; // Adiciona o valor 60 no fim do array


// 5. Checar se um valor existe no array
if (in_array(30, $numeros)) {
    // Retorna true se o número 30 estiver no array
}


// 6. Operações diretas (Estatísticas)
$total   = count($numeros);     // Quantidade de itens
$soma    = array_sum($numeros); // Soma de todos os valores
$maior   = max($numeros);       // Maior número
$menor   = min($numeros);       // Menor número


// 7. Ordenar valores
sort($numeros);  // Ordena do menor para o maior (crescente)
rsort($numeros); // Ordena do maior para o menor (decrescente)


// 8. Converter array de volta para texto (para exibir com echo)
$textoResultado = implode(" - ", $numeros); // Ex: "60 - 50 - 30 - 10"

?>
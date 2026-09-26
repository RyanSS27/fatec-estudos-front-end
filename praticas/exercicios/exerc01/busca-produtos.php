<?php
    function GetProdutos($produto) {
        $estoque = [
            "notebook" => 4100.41,
            "celular" => 2200.50,
            "desktop" => 7525.80
        ];

        $pos = array_search($produto, $estoque);

        if ($pos != null) {
            return "O produto ".$produto." custa R$". $estoque[$produto];
        } else {
            return "Não existe o produto.";
        }
    }
?>
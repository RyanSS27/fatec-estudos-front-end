<?php

    function AvaliaNumero($num) {
        if($num == 0){
            return "Tanto número para testar e você escolhe 0?.";
        }

        if(!is_int($num)) {
            return "Tipo não válido. Manda um inteiro.";
        }

        $resposta = "O número " . $num;
        if($num > 0) {
            $resposta .= " é positivo";
        } else {
            $resposta .= " é negativo";
        }

        if($num % 2 == 0) { 
            $resposta .= ", par";
        } else {
            $resposta .= ", ímpar";
        }

        if($num % 3 == 0) {
            $resposta .= " e é múltiplo de 3.";
        } else {
            $resposta .= " e não é múltiplo de 3.";
        }


        return $resposta;
    }

?>
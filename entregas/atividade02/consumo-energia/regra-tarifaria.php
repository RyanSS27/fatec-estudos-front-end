<?php

    function CalculaTarifa($kwh) {
        if($kwh <= 0)
            return "É uma planta, só consome energia do Sol.";

        $valor = 0;


        if ($kwh <= 100) {
            $valor = $kwh * 0.50;
        } elseif ($kwh <= 300) {
            $valor = $kwh * 0.75;
        } else { 
            $valor = $kwh * 1.00;
        }

        
        if ($kwh > 500) 
            $valor += 50;

        if ($kwh < 50)
            $valor -= 10;

        if ($valor < 0) 
            $valor = 0;
        
        return "R$" . $valor;
    }

?>
<?php

    function IdentificaInfracao($limite, $velocidade) {

        if($velocidade <= $limite)
            return "Sem multa, dentro do limite.";

        if($velocidade <= ($limite * 1.2))
            return "Multa leve. Pra ficar esperto.";

        if($velocidade <= ($limite * 1.5))
            return "Multa grave. Se achando o novo Hamilton.";

        return "Multa gravíssima. Droga, é o Brian!";
    }

?>
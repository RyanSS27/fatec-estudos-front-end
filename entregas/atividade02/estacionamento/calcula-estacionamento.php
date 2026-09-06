<?php

    function CalculaEstacionamento($tipo, $horas) {
        if ($horas <= 0) {
            return "Tempo de permanência inválido. Deve ser maior que 0 horas.";
        }

        $precoHora = 0;
        $nomeVeiculo = "";

        switch ($tipo) {
            case 1:
                $precoHora = 5.00;
                $nomeVeiculo = "Moto";
                break;
            case 2:
                $precoHora = 8.00;
                $nomeVeiculo = "Carro";
                break;
            case 3:
                $precoHora = 12.00;
                $nomeVeiculo = "Caminhão";
                break;
            default:
                return "Opção de veículo inválida. Escolha entre Moto, Carro ou Caminhão.";
        }

        $valorTotal = $precoHora * $horas;

        return "Para o veículo " . $nomeVeiculo . ", por " . $horas . "h, o total a pagar é: R$ " . number_format($valorTotal, 2, ',', '.');
    }

?>
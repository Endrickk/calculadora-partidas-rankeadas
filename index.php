<?php

function quantidadeVitorias(int $valor): string
{

    $vitorias = match (true) {
        $valor <= 10 => "Ferro",
        $valor >= 11 && $valor <= 20 => "Bronze",
        $valor >= 21 && $valor <= 50 => "Prata",
        $valor >= 51 && $valor <= 80 => "Ouro",
        $valor >= 81 && $valor <= 90 => "Diamante",
        $valor >= 91 && $valor <= 100 => "Lendário",
        $valor >= 101 => "Imortal"
    };

    return $vitorias;
}

echo "Digita a quantidade de Viórias\n";

$entrada = fgets(STDIN);


    $resultado = quantidadeVitorias($entrada);

    echo "O resultado é $resultado";

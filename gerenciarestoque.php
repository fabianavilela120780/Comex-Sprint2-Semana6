<?php

$roupas = [
    '1' => [
        'nome' => 'Jaqueta',
        'preco' => 55.40,
        'qtd_estoque' => 120
    ],

    '2' => [
        'nome' => 'Calça',
        'preco' => 65.40,
        'qtd_estoque' => 50
    ],
    '3' => [
        'nome' => 'Regata',
        'preco' => 66.40,
        'qtd_estoque' => 200
    ],

    '4' => [
        'nome' => 'Blusa',
        'preco' => 66.89,
        'qtd_estoque' => 65
    ],
    '5' => [
        'nome' => 'Colete',
        'preco' => 39.99,
        'qtd_estoque' => 100
    ],

    '6' => [
        'nome' => 'Manga longa',
        'preco' => 65.78,
        'qtd_estoque' => 40
    ],
    '7' => [
        'nome' => 'Blazer',
        'preco' => 189.99,
        'qtd_estoque' => 0
    ],
];
foreach ($roupas as $codigo => $detalhes)
{
    echo "Nome: " . $detalhes['nome'] . "\n";
    echo "Quantidade em estoque: " . $detalhes['qtd_estoque'] . "\n\n";
}

//verifica quantidade de modelos
function totalRoupas($roupas) {
    $total = 0;
    foreach ($roupas as $roupa) {
        $total += $roupa['qtd_estoque'];
    }
    return $total;
}
echo "Total de Roupas: ". totalEstoque($Roupas)." modelos.\n". PHP_EOL;

//Adicionando modelos
echo "Adicionando exemplares \n" . PHP_EOL;
function adicionarmodelo($roupas, $indiceProduto) {
    $roupas[$indiceProduto]['qtd_estoque'] += 30;
    return $roupas;
}

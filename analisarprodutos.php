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
function encontrar_maior_menor_preco($roupas) {
    // Inicializa a roupa mais cara e mais barata como a primeira roupa do array
    $roupa_mais_cara = current($roupas);
    $roupa_mais_barata = current($roupas);

    // Itera sobre as roupas restantes no array
    foreach ($roupas as $isbn => $roupas) {
        // Se o preço da roupa atual é maior que a da roupa mais cara, atualiza a roupa mais cara
        if ($roupas['preco'] > $roupa_mais_cara['preco']) {
            $roupa_mais_cara = $roupas;
        }

        // Se o preço da roupa atual é menor que a da roupa mais barata, atualiza a roupa mais barata
        if ($roupas['preco'] < $roupa_mais_barata['preco']) {
            $roupa_mais_barata = $roupas;
        }
    }

    // Imprime o nome e o preço da roupa mais cara e mais barata
    echo "A roupa mais cara é '{$roupa_mais_cara['nome']}' com preço de {$roupa_mais_cara['preco']} ". PHP_EOL;
    echo "A roupa mais barata é '{$roupa_mais_barata['nome']}' com preço de {$roupa_mais_barata['preco']}";
}

// chamando a função
encontrar_maior_menor_preco($roupas);

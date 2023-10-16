
foreach ($roupas as $isbn => $detalhes)
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

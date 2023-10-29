<?php
classe  Produto {
    privado  $ nome ;
    privado  $ preco ;
    private  $ quantidadeEstoque ;

     função  pública __construct ( $ nome , $ preco , $ quantidadeEstoque ) {
        $ this -> nome = $ nome ;
        $ this -> preço = $ preço ;
        $ this -> quantidadeEstoque = $ quantidadeEstoque ;
    }

     função  pública getNome () {
        retorne  $ this -> nome ;
    }

    public  function  getPreco () {
        return  $ this -> preço ;
    }

    public  function  getQuantidadeEstoque (){
        return  $ this -> quantidadeEstoque ;
    }

    public  function  adicionarProduto ( $ quantidade ) {
        $ this -> quantidadeEstoque += $ quantidade ;
    }

    public  function  removedorProduto ( $ quantidade ){
        if ( $ quantidade <= $ this quantidade -> Estoque ) {
            $ this -> quantidadeEstoque -= $ quantidade ;
        } senão {
            echo " Quantidade insuficiente em estoque. \n";
        }
    }

    public  function  calcularValorTotal (){
        return  $ this -> preço * $ this -> quantidadeEstoque ;
    }
}

// Cria um objeto Produto
$roupas = [
    '1' => [
        'nome' => 'Jaqueta',
        'preco' => 55.40,
        'qtd_estoque' => 120
    ],;

// Exibir informações iniciais do produto
echo " Nome do produto: " . $roupas -> getNome () . "\n";
echo " Preço do produto: $ " . $roupas -> getPreco () . "\n";
eco " Quantidade em estoque: " . $roupas -> getQuantidadeEstoque () . "\n";

//Adicionar 10 unidades do produto
$roupas -> adicionarProduto ( 10 );

// Remove 5 unidades do produto
$roupas -> removedorProduto ( 5 );

// Exibir valor total em estoque
echo " Valor total em estoque: $ " . $roupas -> calcularValorTotal () . "\n";

?>

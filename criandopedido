<?php

require_once (__DIR__ . '/objetoCliente.php' );
require_once (__DIR__ . '/objetoProduto.php' );

classe  Pedido {
    privado  $ id ;
     cliente particular $ ;
     $ produtos privados ;

     função  pública __construct ( $ id , $ cliente ){
        $ isto -> id = $ id ;
        $ isto -> cliente = $ cliente ;
        $ this -> produtos = array ();
    }

     função  pública getId (){
        retorne  $ isto -> id ;
    }

     função  pública getCliente (){
        retorne  $ isto -> cliente ;
    }

    public  function  getProdutos (){
        return  $ this -> produtos ;
    }

    public  function  adicionarProduto ( $ roupas , $ quantidade ) {
        $ this -> produtos [] = array ( 'calça' => $ roupas , 'quantidade' => $ quantidade );
    }
}

// Cria um objeto Cliente
$ cliente1 = novo  Cliente (" Maria do Carmo ", " mariadocarmo@email.com ", " 987456321 ", " Rua z, 1236 ");

// Criar um objeto Pedido
$ pedido1 = novo  Pedido ( 1 , $ cliente1 );

// Adicionar produtos ao pedido
$ produto1 = novo  Produto (" jaqueta ", 55.40 , 10 );
$ pedido1 -> adicionarProduto ( $roupas , 2 );

$ produto2 = novo  Produto (" calça ", 65.40 , 7 );
$ pedido1 -> adicionarProduto ( $roupas ,4 );

// Exibir informações do pedido
echo " ID do pedido: " . $ pedido1 -> getId () . "\n";
echo " Cliente do pedido: " . $ pedido1 -> getCliente ()-> getNome () . "\n";
echo " Produtos no pedido: \n";
foreach ( $ pedido1 -> getProdutos () as  $ item ){
    echo " - Produto: " . $ item [ 'produto' ]-> getNome (). " , quantidade: " . $ item [ 'quantidade' ] . "\n";
}


?>

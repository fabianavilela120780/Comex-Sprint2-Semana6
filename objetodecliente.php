<?php

classeCliente  { _
    privado  $ nome ;
     email privado $ ;
    privado  $ celular ;
    privado  $ endereco ;
    private  $ totalCompras ;

     função  pública __construct ( $ nome , $ email , $ celular , $ endereco ) {
        $ this -> nome = $ nome ;
        $ isto -> email = $ email ;
        $ this -> celular = $ celular ;
        $ this -> endereco = $ endereco ;
        $ this -> totalCompras = 0 ; // Inicializa o total de compras como 0
    }

    // Getters
     função  pública getNome () {
        retorne  $ this -> nome ;
    }

     função  pública getEmail () {
        retorne  $ isto -> email ;
    }

     função  pública getCelular (){
        return  $ this -> celular ;
    }

     função  pública getEndereco (){
        return  $ this -> endereco ;
    }

    public  function  getTotalCompras (){
        return  $ this -> totalCompras ;
    }

    //Configuradores
     função  pública setNome ( $ nome ){
        $ this -> nome = $ nome ;
    }

     função  pública setEmail ( $ e-mail ){
        $ isto -> email = $ email ;
    }

    public  function  setCelular ( $ celular ) {
        $ this -> celular = $ celular ;
    }

     função  pública setEndereco ( $ endereco ) {
        $ this -> endereco = $ endereco ;
    }

    // Método para adicionar compras
    public  function  adicionarCompra ( $ valor ){
        $ this -> totalCompras += $ valor ;
    }
}

// Cria um objeto Cliente
$ cliente1 = novo  Cliente (" Maria do Carmo ", " mariadocarmo@email.com ", " 9876451 ", " Rua z, 3654 ");

// Exibir os valores atribuídos à classe
echo " Nome do cliente: " . $ cliente1 -> getNome () . "\n";
echo " E-mail do cliente: " . $ cliente1 -> getEmail () . "\n";
echo " Celular do cliente: " . $ cliente1 -> getCelular () . "\n";
echo " Endereço do cliente: " . $ cliente1 -> getEndereco () . "\n";
echo " Total de compras do cliente: R$ " . $ cliente1 -> getTotalCompras () . "\n";

// Adicione uma compra de R$100 ao cliente
$ cliente1 -> adicionarCompra ( 100 );

// Exibir o novo total de compras
echo " Novo total de compras do cliente: R$ " . $ cliente1 -> getTotalCompras () . "\n";
?>

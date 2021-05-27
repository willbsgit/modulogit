<?php
$produtos = array(
     0 => array(
        "nome" => "1",
        "quantidade" => "",
        "infor" =>""                       //array dentro de outro array *//
    ), 
    1 => array(
        "nome" => "2",
        "quantidade" => "",
        "infor" =>""                       //colocando  uma string *//
    ),
);                     
$produtos[] = array(
        "nome" => "3",
        "quantidade" => "",
        "infor" =>""
);
$produtos[] = "teste";
                                     //echo $produtos["nome"]; //mostrar na tela
print_r($produtos);                  //mostrar todo coteudo *// 
?>
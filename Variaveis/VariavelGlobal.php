<?php 

// a variável global GLOBALS é um array superglobal que permite acessar variáveis globais de qualquer parte do seu código, incluindo dentro de funções. Esse array é útil quando você precisa acessar variáveis globais dentro de funções sem declarar explicitamente a palavra-chave global.

$variavelGlobal = "Eu sou global!";

function mostrarVariavelGlobal() {
    // Acessando a variável global usando $GLOBALS
    echo $GLOBALS['variavelGlobal'];
}

mostrarVariavelGlobal(); // Saída: Eu sou global!



?>
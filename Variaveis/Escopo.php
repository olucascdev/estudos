<?php 


//Global

//Escopo global se refere às variáveis que são declaradas fora de qualquer função, classe ou bloco de código. Essas variáveis podem ser acessadas em qualquer lugar no código, mas para serem usadas dentro de funções, você precisa usar a palavra-chave global.

$variavelGlobal = "Eu sou global!";

function exemploGlobal() {
    global $variavelGlobal; // Faz referência à variável global
    echo $variavelGlobal;   // Funciona aqui dentro da função
}

exemploGlobal();
echo $variavelGlobal; // Funciona aqui fora da função



//Local

//Escopo local se refere às variáveis que são declaradas dentro de uma função, classe ou bloco de código. Essas variáveis só podem ser acessadas e utilizadas dentro do contexto onde foram declaradas. 

function exemploLocal() {
    $variavelLocal = "Eu sou local!";
    echo $variavelLocal; // Funciona aqui dentro da função
}

exemploLocal();
// echo $variavelLocal; // Isso causará um erro, pois $variavelLocal não está definido fora da função



?>
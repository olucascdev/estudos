<?php 
//callbacks são funções que podem ser passadas como parâmetros para outras funções. Eles permitem a execução de uma função específica em um ponto definido do código ou em resposta a um evento específico.

//Callbacks são frequentemente usados em funções de manipulação de arrays e em frameworks e bibliotecas que suportam eventos e manipulação de dados.

function saudacao($nome) {
    return "Olá, " . $nome . "!";
}

function processar($callback, $nome) {
    return $callback($nome);
}

echo processar('saudacao', 'Carlos'); // Saída: Olá, Carlos!


?>
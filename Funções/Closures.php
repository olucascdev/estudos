<?php 
//Closures (ou funções anônimas) em PHP são funções sem um nome explícito e podem ser usadas como valores. Elas são muito úteis quando você precisa passar uma função como argumento para outra função ou quando deseja criar uma função em um escopo específico.
$minhaClosure = function($nome) {
    return "Olá, " . $nome . "!";
};

echo $minhaClosure("Maria"); // Saída: Olá, Maria!

?>
<?php 
$nome= ['Lucas', 'Maria', 'joão'];


//while (condição) {}
    // Código a ser executado enquanto a condição for verdadeira

 //A variável $i é inicializada com 0. Esta variável será usada como índice para acessar os elementos do array $nomes.
 //O loop continua enquanto $i for menor ou igual ao número total de elementos no array $nomes
 //O elemento do array $nomes na posição $i é impresso.
 //A variável $i é incrementada em 1 a cada iteração para acessar o próximo elemento do array.

$i =0;
while($a <= count($nomes)){
    echo $nome[$i];
    $i++;
}


?>
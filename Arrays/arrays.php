<?php 
//Arrays

$data = array('Lucas', 'Maria', 'joão');
$data = ['Lucas', 'Maria', 'joão'];
//lucas = 0 ,maria = 1....

$length = count($data); // count conta apartir do 1


//add item no array
$data[4] = 'last'; //last vai pro final (desse modo substitui valores)
array_push($data, 'test'); //vai pro final tmb
array_unshift($data, 'first'); // Adiciona um ou mais elementos no início do array.
array_shift($data); //Remove o primeiro elemento do array.
array_pop($data); //Remove o último elemento do array.
array_push($data); //Adiciona um ou mais elementos ao final do array.
array_splice($data, 1, 2, array('new', 'elements')); //Remove e/ou substitui elementos.
$slicea = array_slice($data, 1, 2); // Extrai 2 elementos a partir do índice 1
$data = array_fill(0, 3, 'value'); // [ 'value', 'value', 'value' ] Preenche uma parte do array com um valor.
$array = array(1, 2, 3); //Cria um array.
array_merge(array(1, 2), array(3, 4)); // [1, 2, 3, 4] //Mescla um ou mais arrays.





//array dentro de arrays 

$person = ['name'=>"lucas", 'age'=> 22, 'documents'=>['cpf'=> '123456', 'rg'=>'223652235']];

?>
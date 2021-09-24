<?php 
/*Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.
*/
function rng($min, $max, $times){
    $numbers = range($min, $max);
    shuffle($numbers);
    $result[] = array_slice($numbers, 0, $times);
    var_dump($result);
};
echo rng(0, 100, 15);

?>

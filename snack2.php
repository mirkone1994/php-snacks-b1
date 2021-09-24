<?php 
/*Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

$alumns = [
    ['name' => 'Mirko', 'lastname' => 'Chiappori', 'votes' => [10, 6, 7, 8, 5]],
    ['name' => 'Giovanni', 'lastname' => 'Leoncini', 'votes' => [9, 4, 10, 7, 10]],
    ['name' => 'Lorenzo', 'lastname' => 'Cazzola', 'votes' => [8, 5, 9, 7, 3]]
];

function get_average($numbers){
    $all_numbers = count($numbers);
    $all = array_sum($numbers);
    $average = $all / $all_numbers;
    return $average;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($alumns as $alumn) {?>
        <span><?=$alumn['name']?></span>
        <span><?=$alumn['lastname']?></span>
        <span><?= get_average($alumn['votes'])?></span><br>
    <?php } ?>
</body>
</html>
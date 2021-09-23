<?php 
/*Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.
*/

$random_numbers = range(0, 100);
shuffle($random_numbers );
$random_numbers = array_slice($random_numbers ,0,15);
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
    <?php 
    foreach ($random_numbers as $random_number) {?>
    <span><?= $random_number?></span>

    <?php }
    ?>
</body>
</html>
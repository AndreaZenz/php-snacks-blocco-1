<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php

function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

print_r(randomGen(0,15,16)); //generates 20 unique random numbers

for($i = 0 ; $i < 15; $i++){

    $valueBox = [];
    $randomNumb = randomGen(0,15,16);

    array_push($valueBox, $randomNumb);
}

var_dump($valueBox) ;


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
    <div>
    <ul>
    </ul>
    </div>
</body>
</html>
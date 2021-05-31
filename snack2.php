<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$mailAccess = preg_match('(.|@)', $mail);

// if (preg_match('(.|@)', $mail) === 1){
//     $mailAccess = "ok";
// } else {
//     $mailAccess = "denied";
// }

$ageCheck = is_numeric($age);

$stringLen = strlen($name);


// if (!$ageCheck && $stringLen > 3 && $mailAccess == "ok") {
//     echo "accesso riuscito";
// } else {
//     echo "accesso negato";
// }

if ($ageCheck) {
    echo "accesso età riuscito  ";
} else {
    echo "accesso età negato  ";
}

if ($stringLen > 3) {
    echo "accesso nome riuscito  ";
} else {
    echo "accesso nome negato  ";
}

// if ($mailAccess == 1) {
//     echo "accesso email riuscito  ";
// } else {
//     echo "accesso email negato  ";
// }

if ((strpos($mail, "@")) && (strpos($mail, "."))) {
    echo "accesso email riuscito  ";
} else {
    echo "accesso email negato  ";
}